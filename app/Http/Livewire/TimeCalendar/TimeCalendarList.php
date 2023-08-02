<?php

namespace App\Http\Livewire\TimeCalendar;


use Livewire\Component;


class TimeCalendarList extends Component
{
    public $paintCalendar = false;
    public $anio;
    public $mes;
    protected $listeners = ['list-time-calendar' =>'$refresh'];

    public function render()
    {

        return view('livewire.time-calendar.time-calendar-list',);
    }

    public function listarDias($id){
        $data = explode("-",$id);
        $this->anio = $data[0];
        $this->mes = $data[1];
        $this->paintCalendar = true;
    }


}
