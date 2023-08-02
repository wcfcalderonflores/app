<?php

namespace App\Http\Controllers;

use App\Models\Timelog;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{
    public function timeLog(){

        return view('timeLog.extract');
    }
    public function timeLogPersonal(){
        $data = Timelog::where('number_document','=','42407339')->get();
        //dd($data);
        return view('timeLog.personal', compact('data'));
    }
}

