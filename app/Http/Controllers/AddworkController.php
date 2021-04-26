<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App;

class AddworkController extends Controller
{
    public function index($lang) {
        $works = Work::all();
        App::setlocale($lang);
        
        return view('work.allwork')->with(['works' => $works]);
    }

    public function store(Request $request) {
        Work::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        return back();
    }
}
