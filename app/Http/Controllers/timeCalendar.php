<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timeCalendar extends Controller
{
    //
    public function index(){
        return view('timeCalendar.index');
    }

}
