<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;


class CrearEmpresaController extends Controller
{
    protected function store(Request $request)
    {
        return Empresa::create([
            'nombre_empresa' => $request['name_emp'],
            'nombre_corto' => $request['small_name'],
            'tipo_empresa' => $request['tipo_emp'],
            'resp_empresa' => $request['rep_emp'],
            'email_empresa' => $request['email_emp'],
            'direccion' => $request['dir_emp'],
            'telf_empresa' =>$request['telf_emp'],
            'socios' => $request['socio'],
            
        ]);
    }

    public function index()
    {
        $empresas= Empresa::orderBy('nombre_empresa','ASC')->get();
        
        return view('listaEmp', compact('empresas'));
    }

}
