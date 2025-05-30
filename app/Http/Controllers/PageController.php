<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // app/Http/Controllers/PageController.php
    public function home()
    {
        return view('home');
    }

}
