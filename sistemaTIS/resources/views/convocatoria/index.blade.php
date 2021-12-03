@extends('layouts.app')

@section('template_title')
    Convocatorias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Convocatorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('convocatorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear convocatoria') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Fecha publicacion</th>
                                        <th>Fecha Final</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($convocatorias as $convocatoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$convocatoria->tit_conv}}</td>
                                            <td>{{$empresa->desc_conv}}</td>
                                            <td>{{$empresa->f_ini}}</td>
                                            <td>{{$empresa->f_fin}}</td>

                                            <td>
                                                <form action="{{ route('convocatorias.destroy',$convocatoria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('convocatorias.show',$convocatorias->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('convocatorias.edit',$convocatorias->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $convocatorias->links() !!}
            </div>
        </div>
    </div>
@endsection
