<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class embarcacionxpropietario extends Model
{
    use HasFactory;
    protected $fillable = ['propietario','embarcacion'];
}
