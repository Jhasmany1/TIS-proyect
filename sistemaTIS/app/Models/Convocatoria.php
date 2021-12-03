<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    
    protected $fillable=[
        'tit_conv',
        'desc_conv',
        'f_ini',
        'f_fin',
    ];
    public static $rules = array(
        'tit_conv'=> ['required', 'string', 'max:80'],
        'desc_conv'=> ['required', 'string'],
        'f_ini'=> ['required'],
        'f_fin'=> ['required'],
        );
    
}