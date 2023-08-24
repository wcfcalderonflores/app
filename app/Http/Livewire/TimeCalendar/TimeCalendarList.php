<?php

namespace App\Http\Livewire\TimeCalendar;

use App\Models\TimeTable;
use Livewire\Component;


class TimeCalendarList extends Component
{
    public $paintCalendar = false;
    public $term;
    public $ShowSearch;
    public $anio;
    public $mes;
    public $search = '';
    protected $listeners = ['list-time-calendar' =>'$refresh'];

    public function render()
    {
        $timeTables = [];

        if (!empty($this->search)) {
            $timeTables = TimeTable::where('name', 'LIKE', '%' . $this->search . '%')
                            ->orWhere('code', 'LIKE', '%' . $this->search . '%')
                            ->limit(5)
                            ->get();
        }
        return view('livewire.time-calendar.time-calendar-list',['timeTables' => $timeTables]);
    }



    public function listarDias($id){
        $data = explode("-",$id);
        $this->anio = $data[0];
        $this->mes = $data[1];
        $this->paintCalendar = true;

    }

    public function ShowSearch(){


    }
}
