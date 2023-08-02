<?php

namespace App\Http\Livewire\TimeCalendar;

use App\Models\TimeCalendar;
use Livewire\Component;
use Livewire\WithPagination;

class TimeCalendarList extends Component
{
    protected $listeners = ['list-time-calendar' =>'$refresh'];
    public function render()
    {

        return view('livewire.time-calendar.time-calendar-list',);
    }


}
