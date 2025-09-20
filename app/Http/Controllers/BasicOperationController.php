<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicOperationController extends Controller
{
    public function basicOperation()
    {
        return view('jquery.basic');
    }
}
