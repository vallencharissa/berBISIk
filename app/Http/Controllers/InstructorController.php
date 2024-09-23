<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class InstructorController extends Controller
{
    public function create()
    {
        return view('tambahPengajar');
    }

    public function store(Request $request)
    {
        $photoFileName = time() . '-' . $request->name . '.' . $request->photo->extension();
        $request->photo->move(public_path('assets\fotoPengajar'), $photoFileName);

        $instructor = new Instructor;
        $instructor->name = $request->name;
        $instructor->job = $request->job;
        $instructor->description = $request->description;
        $instructor->photo = $photoFileName;
        $instructor->save();
        return redirect('tambahAcara')->withInput();
    }
}
