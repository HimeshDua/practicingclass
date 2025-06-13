<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|digits:5',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Save image
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Return success response (or redirect)
        return back()->with('success', 'Form submitted successfully!')->with('image', $imagePath);
    }
}

