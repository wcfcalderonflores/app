<?php

namespace App\Http\Livewire\Modals;

use App\Models\TimeTable;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUpdateTimeTable extends Component
{
    public $data = [];
    public function render()
    {
        return view('livewire.modals.create-update-time-table');
    }

    public function createTimeTable(){
        Validator::make($this->data,[
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            //'start_break' => 'required',
            //'end_break' => 'required',
            'tolerance' => 'required',
            'code' => 'required'
        ])->validate();

        TimeTable::create($this->data);
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Registro exitoso!!']);
        $this->reset();
        $this->dispatchBrowserEvent('hide-form');
        $this->emit('list-time-table');
        //dd($this->data);
    }

}
