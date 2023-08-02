<?php

namespace App\Http\Livewire\SubArea;

use App\Models\SubArea;
use Livewire\Component;
use Livewire\WithPagination;

class SubAreaList extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['list-subArea' =>'$refresh'];

    public function render()
    {
        $subArea = SubArea::join('areas as a', 'a.id', '=', 'sub_areas.area_id')
                             ->select('a.name as area', 'sub_areas.name as sub_area','sub_areas.id as id')
                             ->where('sub_areas.state', '=', '1')
                             ->where('sub_areas.name', 'LIKE', '%' . $this->search . '%')
                             ->orderBy('id')
                             ->paginate(10);
        return view('livewire.sub-area.sub-area-list',compact('subArea'));
    }


    public function deleteSubArea($id){
        SubArea::find($id)->delete();
        //dd(Personal::find($id));
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Sub Area eliminado con éxito!!']);
        //dd($id);
    }

    public function editSubArea($id){
        $subArea  = SubArea::find($id);
        //dd($area);
        $this->emit('dataSubArea', $subArea);
        $this->dispatchBrowserEvent('show-modal-subArea');
    }

    public function abrirModalSubArea(){
        $this->emit('abrirModal');
        $this->dispatchBrowserEvent('show-modal-subArea');
    }


}
