<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    public function create()
    {
        $empresas = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    public function store(Request $request)
    {
        request()->validate(Empresa::$rules);

        $empresas = Empresa::create($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa registrada exitosamente.');
    }

}