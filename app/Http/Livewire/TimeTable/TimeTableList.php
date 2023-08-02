<?php

namespace App\Http\Livewire\TimeTable;

use App\Models\TimeTable;
use Livewire\Component;
use Livewire\WithPagination;

class TimeTableList extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['list-time-table' =>'$refresh'];
    public function render()
    {
        $timeTables = TimeTable::where('state','=','1')
                                    ->where('name','LIKE','%'.$this->search.'%')
                                    ->orWhere('code','LIKE','%'.$this->search.'%')
                                    ->paginate(10);
        return view('livewire.time-table.time-table-list', compact('timeTables'));
    }

    public function deleteTimeTable($id){
        TimeTable::find($id)->delete();
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Horario eliminado con éxito!!']);
    }
}
