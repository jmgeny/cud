@extends('layouts.principal')

@section('title','Visitas')

@section('sidebar')
@parent
@endsection	

@section('content')
{{-- emp-profile --}}
<section class="container table-responsive emp-profile">
	<div class="row">
		<div class="col-lg-8">
			<h3>Visita de {{ $person->nombre }} {{ $person->apellido }}</h3>
		</div>
		<div class="col-lg-2">
			<a href="{{ url('visit') }}" class="btn btn-primary profile-edit-btn">Listado</a>
		</div>
		<div class="col-lg-2">
			<a href="{{ route('visit.edit', $person->id) }}" class="btn btn-primary profile-edit-btn">Nueva visita</a>
		</div>		
	</div>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			@foreach($visits as $visit)
			<div class="card">
				<div class="card-header bg-primary">{{ $visit->titulo }} {{ $visit->fecha }}</div>
				<div class="card-body">{{ $visit->descripcion }}</div>
			</div>
			<br>
			@endforeach
		</div>
		<div class="col-lg-2"></div>
	</div>
</section>
@endsection