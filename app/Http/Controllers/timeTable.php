<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timeTable extends Controller
{
    //
    public function index(){
        return view('timeTable.index');
    }

    public function timeCalendar(){
        return view('timeCalendar.index');
    }

}
