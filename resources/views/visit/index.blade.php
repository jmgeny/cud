@extends('layouts.principal')

@section('title','Visitas')

@section('sidebar')
@parent
@endsection	

@section('content')
{{-- emp-profile --}}
<section class="container table-responsive emp-profile">
	<div class="row text-center">
		<div class="col-lg-10">
			<h3>Visitas</h3>
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
					</tr>
				</thead>
				<tbody>
					@foreach($persons as $person)
					<tr>
						<th>{{ $person->id }}</th>
						<td>{{ $person->apellido }}</td>
						<td>{{ $person->nombre }}</td>
						<td>{{ $person->email }}</td>
						<td><a href="{{ route('visit.show',$person->id) }}"><button class="btn btn-primary">Ver actividad</button></a>
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