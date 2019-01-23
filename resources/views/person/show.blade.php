@extends('layouts.principal')
@section('title','Personas')
@section('sidebar')
@parent
@endsection	
@section('content')
<section class="container emp-profile">
	<div class="row">
		<div class="col-md-4">
			<h3>Ver persona</h3>
			<div class="profile-img">
				<img src="{{ Storage::url($person->avatar) }}" alt=""/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="profile-head">
				<h5>
					{{ $person->apellido }} {{ $person->nombre }}
				</h5>
				<h6>
					{{ $person->email }}
				</h6>
				{{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personales</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discapacidad</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-2">
			<a href="{{ route('person.index') }}" class="btn btn-primary profile-edit-btn">Listar</a>
		</div>
		<div class="col-md-2">
			<a href="{{ route('person.edit',$person->id) }}" class="btn btn-primary profile-edit-btn">Edit</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			{{-- izquierdo debajo de la imagen --}}
		</div>
		<div class="col-md-8">
			<div class="tab-content profile-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

					<div class="row">
						<div class="col-md-6">
							<label>Nombre y Apellido</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->apellido }} {{ $person->nombre }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>e-mail</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->email }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>DNI</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->dni }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Teléfono</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->telefono }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Fecha Nacimiento</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->fecha }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Trabajo</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->trabajo->nombre }}</p>
						</div>
					</div>					
					<div class="row">
						<div class="col-md-6">
							<label>Estudio</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->estudio->nombre }}</p>
						</div>
					</div>										

				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-6">
							<label>Discapacidad</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->discapacidad->nombre }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Fecha Discapacidad</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->fechadisca }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Adquirida</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->adquirida }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Obra Social</label>
						</div>
						<div class="col-md-6">
							<p>{{ $person->obrasocial->nombre }}</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>           
</section>	
@endsection