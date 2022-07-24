<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicioxpuerto extends Model
{
    use HasFactory;
    protected $fillable = ['puerto','servicio'];
}
