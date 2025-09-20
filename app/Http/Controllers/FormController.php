<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('jquery.form'); // form.blade.php
    }

    public function submitForm(Request $request)
    {
        // validate input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        // just return success for now
        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully!',
            'data' => $request->all()
        ]);
    }
}
