<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function commande()
    {
        return view('user\commande');
    }

    public function page2()
    {
        return view('page2');
    }
}
