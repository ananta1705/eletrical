<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) 
            return Redirect::route('home');

        return Redirect::route('login');
    }

}

