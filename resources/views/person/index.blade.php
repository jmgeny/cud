@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
<h1>Person index card-header</h1>

                </div>

                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>e-mail</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($discas as $disca)
                      <tr>
                        <td>{{ $disca->apellido }}</td>
                        <td>{{ $disca->nombre }}</td>
                        <td>{{ $disca->mail }}</td>
                        <td><a href="{{ route('person.show', $disca->id) }}" class="btn btn-primary">Ver</a></td>
                        <td><a href="{{ route('person.edit', $disca->id) }}" class="btn btn-primary">Editar</a></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-delete-{{ $disca->id }}">Desactivar</button></td>
                      </tr>
                      @include('person.modal')
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection