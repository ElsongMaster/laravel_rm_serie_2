<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pg2Controller extends Controller
{
    public function index() {
    $age = 28;
    return view('pages.pg2',compact('age'));
}
}
