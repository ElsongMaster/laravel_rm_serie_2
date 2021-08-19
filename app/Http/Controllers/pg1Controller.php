<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pg1Controller extends Controller
{
    public function index() {
    $nom = "Elvis Dushime Emani";
    return view('pages.pg1',compact('nom'));
}
}
