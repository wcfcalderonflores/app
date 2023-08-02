<?php

namespace App\Http\Livewire\Position;

use App\Models\Position;
use Livewire\Component;
use Livewire\WithPagination;

class PositionList extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['list-position' =>'$refresh'];

    public function render()
    {
        $position = Position::where('state','=','1')
                    ->where('name','LIKE','%'.$this->search.'%')
                    ->orderBy('id')
                    ->paginate(10);
        return view('livewire.position.position-list',compact('position'));
    }


    public function deletePosition($id){
        Position::find($id)->delete();
        //dd(Personal::find($id));
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Position eliminado con éxito!!']);
        //dd($id);
    }


    public function editPosition($id){
        $position  = Position::find($id);
        //dd($area);
        $this->emit('dataPosition', $position);
        $this->dispatchBrowserEvent('show-modal-position');
    }

    public function abrirModalPosition(){
        $this->emit('abrirModal');
        $this->dispatchBrowserEvent('show-modal-position');
    }
}
