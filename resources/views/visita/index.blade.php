@extends('layouts.principal')

@section('title','Visitas')

@section('sidebar')
@parent
@endsection	

@section('content')
{{-- emp-profile --}}
<section class="container table-responsive emp-profile">
	<div class="row">
		<div class="col-lg-10">
			<h3>Visitas</h3>
		</div>
		<div class="col-lg-2">
			<a href="{{ route('person.create') }}" class="btn btn-primary profile-edit-btn">Nuevo</a>
		</div>
	</div>
	<div class="row">
		{{-- <div class="col-lg-2"></div> --}}
		<div class="col-lg-12">
			@include('info')
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Apellido</th>
						<th>Nombre</th>
						<th>e-mail</th>
						<th>Ver</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($persons as $person)
					<tr>
						<th>{{ $person->id }}</th>
						<td>{{ $person->apellido }}</td>
						<td>{{ $person->nombre }}</td>
						<td>{{ $person->email }}</td>
						<td><a href="{{ route('person.show',$person->id) }}"><button class="btn btn-primary">Ver</button></a></td>
						<td><a href="{{ route('person.edit',$person->id) }}"><button class="btn btn-warning">Editar</button></a></td>
						<td>
							@if($person->status === '1')
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $person->id }}">Eliminar</button>
							@endif
						</td>
					</tr>
					@include('person.parcial.modal')
					@endforeach

				</tbody>
			</table>
		</div>
		{{-- <div class="col-lg-2"></div> --}}
	</div>
</section>
@endsection