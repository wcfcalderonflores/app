<?php

namespace App\Http\Livewire\TimeCalendar;

use App\Models\Personal;
use Livewire\Component;
use App\Models\TimeTable;


class TimeCalendarList extends Component
{

    public $search;
    public $personals;

    protected $listenerss = ['list-personal' => '$refresh'];
    public $paintCalendar = false;
    public $anio;
    public $mes;
    public $schedule;
    public $times = 'AR';
    public $timeTabs = [];

    protected $listeners = ['list-time-calendar' => '$refresh'];

    public function render()
    {
        $timeTab = TimeTable::where('state', '=', '1')
            ->where('name', 'LIKE', '%' . $this->schedule . '%')
            ->orWhere('code', 'LIKE', '%' . $this->schedule . '%')
            ->paginate(10);

        $personals = Personal::join('sub_areas as sa','sa.id','=','personals.sub_area_id')
            ->join('areas as a','a.id','=','sa.area_id')
            ->join('positions as p','personals.position_id','=','p.id')
            ->select('personals.id','personals.name','personals.last_name','personals.type_document','personals.number_document','personals.fecha_ingreso','personals.type_contract','personals.type_personal','a.name as area','sa.name as sub_area','p.name as position')
            ->where('personals.state','=','1')
            ->where('personals.name','LIKE','%'.$this->search.'%')
            ->orWhere('last_name','LIKE','%'.$this->search.'%')
            ->orWhere('number_document','LIKE','%'.$this->search.'%')
            ->orderBy('id')
            ->paginate(10);

        return view('livewire.time-calendar.time-calendar-list', compact('personals', 'timeTab'));
    }

    public function ListarPersonasSearch()
    {
        $this->personals = Personal::join('sub_areas as sa','sa.id','=','personals.sub_area_id')
            ->join('areas as a','a.id','=','sa.area_id')
            ->join('positions as p','personals.position_id','=','p.id')
            ->select('personals.id','personals.name','personals.last_name','personals.type_document','personals.number_document','personals.fecha_ingreso','personals.type_contract','personals.type_personal','a.name as area','sa.name as sub_area','p.name as position')
            ->where('personals.state','=','1')
            ->where('personals.name','LIKE','%'.$this->search.'%')
            ->orWhere('last_name','LIKE','%'.$this->search.'%')
            ->orWhere('number_document','LIKE','%'.$this->search.'%')
            ->orderBy('id')
            ->paginate(10);
    }




    public function listarDias($id){
        $data = explode("-",$id);
        $this->anio = $data[0];
        $this->mes = $data[1];
        $this->paintCalendar = true;
    }


}
