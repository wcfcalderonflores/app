<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = ['name','last_name','type_document','number_document','fecha_nac','fecha_ingreso','direccion_act','correo','celular','type_contract','type_personal','position_id','sub_area_id','image','state'];
}
