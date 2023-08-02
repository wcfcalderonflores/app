<?php

namespace App\Http\Livewire\Modals;
use App\Models\Area;
use App\Models\SubArea;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUpdateSubArea extends Component
{
       public $data;
       public $opcion = 'Registrar';
       public $subArea;

       protected $listeners = ['dataSubArea','abrirModal'];
     public function render()
    {
        $areas     = Area::where('state','=','1')->get();
        return view('livewire.modals.create-update-sub-area', compact('areas'));
    }

    public function CreateSubArea(){
        $message = 'Registro exitoso!!';
        Validator::make($this->data,[
            'name' => 'required',
            'area_id' => 'required'
        ])->validate();
        if($this->opcion == 'Registrar'){
            SubArea::create($this->data);
        }
        else{
            $this->subArea->update([
                'name' => $this->data['name'],
                'area_id'=>$this->data['area_id']
            ]);
            $message = 'Actualización exitosa!!';
            //dd($this->area);
        }
        $this->dispatchBrowserEvent('toastr', ['message'=> $message]);
        $this->limpiar();
        $this->dispatchBrowserEvent('hide-form');
        $this->emit('list-subArea');
    }

    function limpiar(){
        $this->data['name'] = '';
        //$this->data['name'] = '';
    }


    public function dataSubArea( SubArea $subArea){
        $this->subArea = $subArea;
        $this->opcion = 'Actualizar';
        $this->data['name'] = $subArea->name;
        $this->data['area_id'] = $subArea->area_id;
    }
    public function abrirModal(){
        $this->opcion = 'Registrar';
        $this->data['name'] = '';
        $this->data['area_id'] = '';
    }
}
