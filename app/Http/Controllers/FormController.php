<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function receiveForm1(Request $request)
    {
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');



        return "Hello $firstName $lastName! Your data has been received.";
    }
}

