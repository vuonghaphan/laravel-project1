<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome_Controller extends Controller
{
    function getWelcome() {
        return view('welcome');
    }
}
