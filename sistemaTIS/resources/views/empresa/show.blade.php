@extends('layouts.app')

@section('template_title')
    {{ $documentacion->name ?? 'Show Documentacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Documentacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('documentacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sobrea:</strong>
                            {{ $documentacion->SobreA }}
                        </div>
                        <div class="form-group">
                            <strong>Sobreb:</strong>
                            {{ $documentacion->sobreB }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
