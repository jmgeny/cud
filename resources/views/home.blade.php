@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Administrador Principal</h3>
            <div class="card">
                <div class="card-header">
                    <div class="links">
                        <a href="{{ url('/discapacidad') }}" class="btn btn-primary">Discapacidades</a>
                        <a href="{{ url('/person') }}" class="btn btn-primary">Personas</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
