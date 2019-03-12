@extends('layouts.principal')

@section('title','Personas')

@section('sidebar')
@parent
@endsection	

@section('content')
<section class="container emp-profile">
	<div class="row">
		<div class="col-md-8">
	<h3>Editar persona</h3>
			
		</div>
		<div class="col-md-2">
			<a href="{{ route('person.index') }}" class="btn btn-primary profile-edit-btn">Listar</a>
		</div>
		<div class="col-md-2">
			<a href="{{ route('person.create') }}" class="btn btn-primary profile-edit-btn">Nuevo</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			{!! Form::model($person,['route'=>['person.update',$person->id], 'method'=>'PUT', 'files'=>'true' ]) !!}
			@include('person.parcial.formEdit')
			{!! Form::close() !!}
		
		</div>
		<div class="col-md-1"></div>
	</div>

</section>	
@endsection