<?php

namespace App\Http\Livewire\Modals;

use App\Models\Area;
use App\Models\Personal;
use App\Models\Position;
use App\Models\SubArea;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUpdatePersonal extends Component
{
    public $subAreas = [];
    public $area = [];
    public $data;
    public $opcion = 'Registrar';
    public $personal;
    protected $listeners = ['dataPersonal','abrirModal'];

    public function mount(){
        $this->data['type_document'] = '01';
        $this->data['type_contract'] = '01';
        $this->data['type_personal'] = '01';

    }
    public function render()
    {
        $areas     = Area::where('state','=','1')->get();
        $cargos    = Position::where('state','=','1')->get();
        return view('livewire.modals.create-update-personal', compact('areas','cargos'));
    }
    public function buscarSubArea($id){
        $this->subAreas = SubArea::where('area_id','=',$id)->get();

        //dd($this->subAreas);
    }

    public function createPersonal(){
        $message = 'Registro exitoso!!';
        Validator::make($this->data,[
            'name' => 'required',
            'last_name' => 'required',
            'type_document' => 'required',
            'number_document' => 'required',
            'fecha_nac' => 'required',
            'fecha_ingreso' => 'required',
            'direccion_act' => 'required',
            'correo' => 'required',
            'celular' => 'required',
            'area_id' => 'required',
            'sub_area_id' => 'required',
            'type_contract' => 'required',
            'type_personal' => 'required',
            'position_id' => 'required'
        ])->validate();
        if($this->opcion == 'Registrar'){
            Personal::create($this->data);
        }
        else{
            $this->personal->update([
                'name' => $this->data['name'],
                'last_name' => $this->data['last_name'],
                'type_document' => $this->data['type_document'],
                'number_document' => $this->data['number_document'],
                'fecha_nac' => $this->data['fecha_nac'],
                'fecha_ingreso'=> $this->data['fecha_ingreso'],
                'direccion_act' => $this->data['direccion_act'],
                'correo' => $this->data['correo'],
                'celular' => $this->data['celular'],
                'area_id' => $this->data['area_id'],
                'sub_area_id' => $this->data['sub_area_id'],
                'type_contract' => $this->data['type_contract'],
                'type_personal' => $this->data['type_personal'],
                'position_id' => $this->data['position_id']
            ]);
            $message = 'Actualización exitosa!!';
            //dd($this->area);
        }
        $this->dispatchBrowserEvent('toastr', ['message'=> $message]);
        $this->limpiar();
        $this->dispatchBrowserEvent('hide-form');
        $this->emit('list-personal');
    }

    function limpiar(){
        $this->data['name'] = '';
        $this->data['last_name'] = '';
        $this->data['number_document'] = '';
        //$this->data['name'] = '';
    }

    public function dataPersonal( Personal $personal){
        $this->personal = $personal;
        $this->opcion = 'Actualizar';
        $this->data['name'] = $personal->name;
        $this->data['last_name']= $personal->last_name;
        $this->data['type_document']= $personal->type_document;
        $this->data['number_document']= $personal->number_document;
        $this->data['fecha_nac']= $personal->fecha_nac;
        $this->data['fecha_ingreso']= $personal->fecha_ingreso;
        $this->data['direccion_act']= $personal->direccion_act;
        $this->data['correo']= $personal->correo;
        $this->data['celular']= $personal->celular;
        $this->data['area_id']= $personal->area_id;
        $this->data['sub_area_id']= $personal->sub_area_id;
        $this->data['type_contract']= $personal->type_contract;
        $this->data['type_personal']= $personal->type_personal;
        $this->data['position_id']= $personal->position_id;
    }
    public function abrirModal(){
        $this->opcion = 'Registrar';
        $this->data['name'] = '';
        $this->data['last_name']= '';
        $this->data['type_document']= '';
        $this->data['number_document']= '';
        $this->data['fecha_nac']= '';
        $this->data['fecha_ingreso']= '';
        $this->data['direccion_act']= '';
        $this->data['correo']= '';
        $this->data['celular']= '';
        $this->data['area_id']= '';
        $this->data['sub_area_id']= '';
        $this->data['type_contract']= '';
        $this->data['type_personal']= '';
        $this->data['position_id']= '';
    }
}
