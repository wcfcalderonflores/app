<?php

namespace App\Http\Livewire\Area;

use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;

class AreaList extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['list-area' =>'$refresh'];

    public function render()
    {
        $area = Area::where('state','=','1')
                    ->where('name','LIKE','%'.$this->search.'%')
                    ->orderBy('id')
                    ->paginate(10);
        return view('livewire.area.area-list',compact('area'));
    }


    public function deleteArea($id){
        Area::find($id)->delete();
        //dd(Personal::find($id));
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Area eliminado con éxito!!']);
        //dd($id);
    }

    public function editArea($id){
        $area  = Area::find($id);
        //dd($area);
        $this->emit('dataArea', $area);
        $this->dispatchBrowserEvent('show-modal-area');
    }

    public function abrirModalArea(){
        $this->emit('abrirModal');
        $this->dispatchBrowserEvent('show-modal-area');
    }
}
