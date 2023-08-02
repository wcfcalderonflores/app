<?php

namespace App\Http\Livewire\TimeLog;

use App\Models\Timelog as ModelsTimelog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TimeLog extends Component
{
    public $startFech;
    public $endFech;
    public $data = [];
    public function render()
    {

        return view('livewire.time-log.time-log');
    }

    public function extractTimeLog(){
        $data = DB::connection('sqlsrv')
                ->table('acc_transaction')
                ->select('id','event_time as time','pin as number_document','dev_alias as location')
                ->whereBetween(DB::raw('cast(event_time as DATE)'),[$this->startFech,$this->endFech])
                ->get();

                //dd($data);
        $data = json_decode( json_encode($data), true);
        //dd($data);
        $cant = count($data);
        if($cant > 0){
            try {
                //DB::enableQueryLog();
                $chunked= array_chunk($data,65000/4,true); // lo dividimos entre 4 por que tenemos 4 campos pr registro
                $count = 0;
                foreach($chunked as $chun){
                    $insert = ModelsTimelog::insertOrIgnore($chun);
                    $count += $insert;
                }
                //dd(DB::getQueryLog());
                $this->dispatchBrowserEvent('toastr',['message'=>'Se insertaron '.$count.' Registros!!']);
                $this->endFech = '';
                $this->startFech = '';
            } catch (\Throwable $th) {
                $this->endFech = '';
                $this->startFech = '';
                $this->dispatchBrowserEvent('toastr-error',['message'=>$th->getMessage()]);
            }
        }else{
            $this->dispatchBrowserEvent('toastr',['message'=>'No existen registros']);
        }
    }



}
