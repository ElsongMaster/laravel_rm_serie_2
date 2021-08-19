<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pg4Controller extends Controller
{
    public function index(){
        $tabOutils = [(object)["nom"=>"crayon"],(object)["nom"=>"gomme"],(object)["nom"=>"classeur"],(object)["nom"=>"bic"]];
        return view('pages.pg4',compact('tabOutils'));
    }
}
