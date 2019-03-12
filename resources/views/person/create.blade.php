@extends('layouts.principal')

@section('title','Personas')

@section('sidebar')
@parent
@endsection	

@section('content')
<section class="container emp-profile">
	<div class="row">
		<div class="col-md-10">
			<h3>Create de Persona</h3>
			
		</div>
		<div class="col-md-1">
			<a href="{{ route('person.index') }}" class="btn btn-primary profile-edit-btn">Listar</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
			{!! Form::open(['route'=>'person.store','files'=>'true']) !!}
			@include('person.parcial.formCreate')
			{!! Form::close() !!}
		</div>
		<div class="col-md-1"></div>
	</div>
</section>	
@endsection