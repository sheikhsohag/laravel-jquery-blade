<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpineController extends Controller
{
    public function __construct()
    {

    }
    public function basic(){
        return view('alpine.basic');
    }
}
