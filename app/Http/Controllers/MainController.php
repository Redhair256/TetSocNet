<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ViewMenu()
    {
        //
        
        return view('Main');

    }
    public function ViewHome()
    {
        //
        
        return view('base');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
}
