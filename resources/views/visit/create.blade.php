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
			<h3>Crear Visita</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			@include('visit.parcial.form')
		</div>
		<div class="col-lg-2"></div>
	</div>
</section>
@endsection