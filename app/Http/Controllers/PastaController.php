<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class PastaController extends Controller
{
    public function index(){
        return view('/index',[
            "title" => "pasta",
            "menu" => menu::all()
        ]);
    }

    public function show($slug){
        return view('/index',[
            "title" => "Single Post",
            "posts" => Post::find($slug)
        ]);
    }
}
