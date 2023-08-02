<?php

namespace App\Http\Livewire\Modals;

use App\Models\Position;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUpdatePosition extends Component
{


    public $data;
    public $opcion = 'Registrar';
    public $position;
    protected $listeners = ['dataPosition','abrirModal'];

     public function render()
    {
        return view('livewire.modals.create-update-position');
    }

    public function CreatePosition(){
        $message = 'Registro exitoso!!';
        Validator::make($this->data,[
            'name' => 'required'
        ])->validate();
        if($this->opcion == 'Registrar'){
            Position::create($this->data);
        }
        else{
            $this->position->update([
                'name' => $this->data['name']
            ]);
            $message = 'Actualización exitosa!!';
            //dd($this->area);
        }

        $this->dispatchBrowserEvent('toastr', ['message'=> $message]);
        $this->limpiar();
        $this->dispatchBrowserEvent('hide-form');
        $this->emit('list-position');
    }

    function limpiar(){
        $this->data['name'] = '';
        //$this->data['name'] = '';
    }

    public function dataPosition( Position $position){
        $this->position = $position;
        $this->opcion = 'Actualizar';
        $this->data['name'] = $position->name;
    }
    public function abrirModal(){
        $this->opcion = 'Registrar';
        $this->data['name'] = '';
    }
}
