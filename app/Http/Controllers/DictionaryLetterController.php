<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryLetterController extends Controller
{
    public function index(){
        $dictionary = Dictionary::all()->filter(function ($item) {
            return strlen($item->word) === 1;
        });
        return view('kamusHuruf', ['daftarHuruf' => $dictionary]);
    }
}
