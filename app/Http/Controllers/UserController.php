<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UsersEvent;
use App\Models\EventDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventSchedule;
use Illuminate\Support\Facades\DB;
use App\Models\UsersVolunteerEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\registerRequest;


class UserController extends Controller
{
    public function show()
    {
        $currentDate = Carbon::now();
        $user = Auth::user();
        $userId = Auth::user()->id;
        $userRoleId = $user->role_id;

        $userEvent = UsersEvent::with('events', 'events.event_types', 'events.instructors', 'events.event_schedules', 'events.event_details')
            ->where('user_id', $userId)
            ->whereHas('events.event_details', function ($query){
                $query->whereColumn('users_events.session_done', '!=','event_details.session');
            })
        ->get();

        $userVolunteerEvent = UsersVolunteerEvent::with('volunteer_events', 'volunteer_events.volunteer_event_schedules')
        ->where('user_id', $userId)
        ->whereHas('volunteer_events.volunteer_event_schedules', function ($query){
            $query->where('status_id', 1);
        })->get();
        
        $loggedInUsers = null;
        if ($userRoleId == 2) {
            $loggedInUsers = User::all()->map(function ($user) {
                $user->isActive = $user->last_activity ? Carbon::parse($user->last_activity)->gt(Carbon::now()->subMinutes(1)) : false;
                return $user;
            });
        }

        $events = UsersEvent::with('events', 'events.event_types', 'events.instructors', 'events.event_schedules', 'events.reviews')
        ->where('user_id', $userId)
        ->whereHas('events.event_details', function ($query){
            $query->whereColumn('users_events.session_done', 'event_details.session');
        })->get();

        // dd($events);

        $volunteerEvents = UsersVolunteerEvent::with('volunteer_events', 'volunteer_events.volunteer_event_schedules')->where('user_id', $userId)
        ->whereHas('volunteer_events.volunteer_event_schedules', function ($query){
            $query->where('status_id', 2);
        })->get();

                                
        return view('profil', ['daftarAcaraUser' => $userEvent, 'daftarAcaraRelawanUser' => $userVolunteerEvent, 'loggedInUsers' => $loggedInUsers, 'daftarRiwayatAcara' => $events, 'daftarRiwayatAcaraRelawan' => $volunteerEvents]);

    }


    public function create()
    {
        return view('register');
    }

    public function store(registerRequest $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => ['required'], 
        ]);

        // $data = [
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ];

        // User::create($data);
        $emailParts = explode('@', $request->email);

        $user = new User;
        $user->role_id = 1;
        $user->name = $emailParts[0];
        $user->email = $request->email;
        $user->phone = '-';
        $user->photo = 'profilTemp.png';
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->last_activity = Carbon::now();
        $user->save();

        // if (Auth::attempt($credentials)) {

        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
    
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/');

    }

    public function edit()
    {
        $user = Auth::user();
        return view('editProfil', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            
        ]);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/fotoUser'), $filename);
            $user->photo = $filename;
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diubah');
    }

    public function history(Request $request, $id){
        $daftarRiwayatAcara = UsersEvent::with('events', 'events.event_types', 'events.instructors', 'events.event_schedules', 'events.reviews')
        ->where('user_id', $id)
        ->whereHas('events.event_details', function ($query){
            $query->whereColumn('users_events.session_done', 'event_details.session');
        })->get();

        $daftarRiwayatAcaraRelawan = UsersVolunteerEvent::with('volunteer_events', 'volunteer_events.volunteer_event_schedules')->where('user_id', $id)
        ->whereHas('volunteer_events.volunteer_event_schedules', function ($query){
            $query->where('status_id', 2);
        })->get();

        return view('riwayat', ['daftarRiwayatAcara' => $daftarRiwayatAcara, 'daftarRiwayatAcaraRelawan' => $daftarRiwayatAcaraRelawan]);
    }
}
