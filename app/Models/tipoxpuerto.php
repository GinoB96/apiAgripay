<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoxpuerto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['puerto','tipo_embarcacion'];
}
