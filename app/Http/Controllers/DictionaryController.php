<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DictionaryController extends Controller
{
    public function index(Request $request)
    {
        $keywords = $request->keyword;
        $keyword = explode(' ', $keywords);
        $dictionarySearch = new Collection();

        if($keywords != null){
            foreach($keyword as $word){
                $found = Dictionary::where('word', 'LIKE', '%'.$word.'%')->get();
                if($found->isEmpty()){
                    $letters = str_split($word);
                    foreach($letters as $letter){
                        $found = $found->concat(Dictionary::where('word', $letter)->get());
                    }
                }
                $dictionarySearch = $dictionarySearch->concat($found);
            }
        }
        
        $dictionary = Dictionary::all()->reject(function ($item) {
            return strlen($item->word) === 1;
        });

        return view('kamus', ['daftarKamus' => $dictionary, 'kamusCari' => $dictionarySearch]);
    }
}
