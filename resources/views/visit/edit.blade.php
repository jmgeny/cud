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
			<h3>Crear Visita de: {{ $person->nombre }} {{ $person->apellido }}</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
			
		</div>
		<div class="col-lg-8">
			{!! Form::model($person,['route'=>['visit.update',$person->id], 'method'=>'PUT', 'files'=>'true' ]) !!}	
				@include('visit.parcial.form')
			{!! Form::close() !!}	
		</div>
		<div class="col-lg-2">
			
		</div>
	</div>
</section>
@endsection