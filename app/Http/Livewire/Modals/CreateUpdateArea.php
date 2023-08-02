<?php

namespace App\Http\Livewire\Modals;

use App\Models\Area;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUpdateArea extends Component
{
    public $subAreas = [];
    public $data;
    public $opcion = 'Registrar';
    public $area;

    protected $listeners = ['dataArea','abrirModal'];
     public function render()
    {
        return view('livewire.modals.create-update-area');
    }

    public function CreateArea(){
        $message = 'Registro exitoso!!';
        Validator::make($this->data,[
            'name' => 'required'
        ])->validate();
        if($this->opcion == 'Registrar'){
            Area::create($this->data);
        }

        else{
            $this->area->update([
                'name' => $this->data['name']
            ]);
            $message = 'Actualización exitosa!!';
            //dd($this->area);
        }

        $this->dispatchBrowserEvent('toastr', ['message'=> $message]);
        $this->limpiar();
        $this->dispatchBrowserEvent('hide-form');
        $this->emit('list-area');
    }

    function limpiar(){
        $this->data['name'] = '';
        //$this->data['name'] = '';
    }

    public function dataArea( Area $area){
        $this->area = $area;
        $this->opcion = 'Actualizar';
        $this->data['name'] = $area->name;
    }
    public function abrirModal(){
        $this->opcion = 'Registrar';
        $this->data['name'] = '';
    }
}
