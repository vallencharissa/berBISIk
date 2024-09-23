<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');

    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function authenticating(Request $request)
    {
        // Session::flash('email', $request->email);
   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'], 
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            Session::flash('status', 'failed');
            Session::flash('message', 'User not found');
            return redirect('/login');
        }

        // Debugging: Check if the password matches
        if (!Hash::check($request->password, $user->password)) {
            Session::flash('status', 'failed');
            Session::flash('message', 'Invalid password');
            // Session::flash('provided_password', $request->password);
            // Session::flash('hashed_password', $user->password);
            return redirect('/login');
        }

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     // return redirect('/');
        //     return redirect()->intended('/beranda');
        // }

        if (Auth::attempt($credentials)) {
            // if ($user->role_id == 1) { // Assuming role_id 2 is for admin
            //     Auth::logout();
            //     Session::flash('status', 'failed');
            //     Session::flash('message', 'You do not have permission to access this page.');
            //     return redirect('/login');
            // }

            $request->session()->regenerate();
            Auth::user()->update(['last_activity' => Carbon::now()]);
            return redirect()->intended('/');
        }

    //    Session::flash('status', 'failed');
    //    Session::flash('message', 'login wrong');

       return redirect('/login');
    }

}
