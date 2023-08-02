<?php

namespace App\Http\Livewire\TimeLog;

use App\Models\Timelog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TimelogPersonal extends Component
{
    public $startFech;
    public $endFech;
    public $numberDoc;
    //public $data = [];
    public $pintar = false;

    public function render()
    {   $data = [];
        if ($this->pintar) {
            if (strlen($this->numberDoc)>=7) {
                $data = Timelog::select('time','number_document','location')
                        ->whereBetween(DB::raw('date(time)'),[$this->startFech,$this->endFech])
                        ->where('number_document','=',$this->numberDoc)
                        ->get();
            }else{
                $data = Timelog::select('time','number_document','location')
                            ->whereBetween(DB::raw('date(time)'),[$this->startFech,$this->endFech])
                            //->where('number_document','=',$this->numberDoc)
                            ->get();
            }
            $this->endFech      = '';
            $this->startFech    = '';
            $this->numberDoc    = '';
        }


        return view('livewire.time-log.timelog-personal',compact('data'));
    }

    public function timeLogPersonal(){
        $this->validate([
            'startFech' => 'required',
            'endFech' => 'required'
        ]);
        $this->pintar = true;


    }
}
