<?php

namespace App\Http\Controllers;
use App\Models\Timelog;
use Illuminate\Http\Request;

class timeCalendar extends Controller
{
    //
    public function index(){
        return view('timeCalendar.index');
    }
    public function timeLogPersonal(){
        $data = Timelog::where('number_document','=','42407339')->get();
        //dd($data);
        return view('timeLog.personal', compact('data'));
    }
}
