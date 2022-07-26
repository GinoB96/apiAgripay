<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embarcacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['matricula','nombre','color','largo','ancho','carga_max','tipo_embarcacion'];
}
