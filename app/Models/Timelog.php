<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timelog extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','time','number_document','location','created_at','updated_at'];
    protected $primaryKey = 'id';
    public $incrementing = false;
}
