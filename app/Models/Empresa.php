<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    protected $fillable=[
        'nombre_empresa',
        'nombre_corto',
        'tipo_empresa',
        'rep_empresa',
        'email_empresa',
        'direccion',
        'telf_empresa',
        'socios',
    ];
 
}
