<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRequest;

class requestController extends Controller
{
    public function store(Request $req)
    {
        // Validate the form data
        $validatedData = $req->validate([
            "User_Name" => "required|string",
            "User_email" => "required|email",
            "User_Message" => "required|string",
            "User_Subject" => "required|string",
        ]);

        // Create and save a new user request instance
        UserRequest::create($validatedData);

        // Redirect back with success message or do something else if needed
        return redirect()->back()->with('success', 'Your request has been submitted successfully!');
    }
}
