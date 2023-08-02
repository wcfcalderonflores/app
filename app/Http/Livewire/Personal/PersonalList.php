<?php

namespace App\Http\Livewire\Personal;

use App\Models\Personal;
use Livewire\Component;
use Livewire\WithPagination;

class PersonalList extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['list-personal' =>'$refresh'];

    public function render()
    {
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
        return view('livewire.personal.personal-list',compact('personals'));
    }
    public function nameTypeContract($data){
        switch ($data) {
            case '01':
                return 'CAS';
                break;
            case '02':
                return 'Nombrado';
                break;
        }
    }
    public function nameTypePersonal($data){
        switch ($data) {
            case '01':
                return 'Administrativo';
                break;
            case '02':
                return 'Asistencial';
                break;
        }
    }

    public function deletePersonal($id){
        Personal::find($id)->delete();
        //dd(Personal::find($id));
        $this->dispatchBrowserEvent('toastr', ['message'=> 'Personal eliminado con éxito!!']);
        //dd($id);
    }

    public function editPersonal($id){
        $personal  = Personal::find($id);
        //dd($area);
        $this->emit('dataPersonal', $personal);
        $this->dispatchBrowserEvent('show-modal-personal');
    }

    public function abrirModalPersonal(){
        $this->emit('abrirModal');
        $this->dispatchBrowserEvent('show-modal-personal');
    }
}
