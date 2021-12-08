@extends('layouts.app')

@section('template_title')
    {{ $convocatoria->tit_conv ?? 'Ver convocatoria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Convocatoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('convocatorias.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        
                        <div class="form-group">
                            <strong>Codigo de la convocatoria</strong>
                            {{ $convocatoria->id }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo de la convocatoria</strong>
                            {{ $convocatoria->tit_conv }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion de la convocatoria</strong>
                            {{ $convocatoria->desc_conv }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de publicacion</strong>
                            {{ $convocatoria->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de finalizacion</strong>
                            {{ $convocatoria->f_fin }}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
