<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pg3Controller extends Controller
{
   public function index() {
    $adresse = "Molenbeek";
    return view('pages.pg3',compact('adresse'));
}
}
