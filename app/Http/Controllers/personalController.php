<?php

namespace App\Http\Controllers;
use App\Models\Timelog;
use Illuminate\Http\Request;
use App\Models\Personal;


class personalController extends Controller
{
    //

    public function personal(){
        return view('personal.index');
    }

    public function area(){
        return view('area.index');
    }
    public function SubArea(){
        return view('subArea.index');
    }
    public function Position(){
        return view('position.index');
    }


    public function buscar(Request $request)
    {
        $term = $request->input('term');

        $personals = Personal::where('name', 'LIKE', '%' . $term . '%')->get();


        return response()->json($personals);
    }

    public function timeLogPersonal(){
        $data = Timelog::where('number_document','=','42407339')->get();
        //dd($data);
        return view('timeLog.personal', compact('data'));
    }
}
