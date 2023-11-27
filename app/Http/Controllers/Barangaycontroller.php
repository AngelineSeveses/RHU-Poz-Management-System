<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Barangaycontroller extends Controller
{
    public function brgyhomepage(){
        return view('brgy.brgyhomepage');
    }
}
