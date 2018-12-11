@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="links">
                        <a href="{{ url('/discapacidad') }}">Discapacidades</a>
{{--                         <a href="https://laracasts.com">Actualizacion</a>
                        <a href="https://laravel-news.com">Consulta</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                    </div>
                </div>

                <div class="card-body">
                    
                @foreach($discas as $disca)
                    {{ $disca->nombre }}<br>
                @endforeach    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection