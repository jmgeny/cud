<div class="form-group">
	{!! Form::label('nombre','Nombre') !!}
	{!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido') !!}
	{!! Form::text('apellido', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('dni','DNI') !!}
	{!! Form::text('dni',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono','Teléfono') !!}
	{!! Form::text('telefono',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('fecha','Fecha de Nacimiento') !!}
	{!! Form::date('fecha',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('discapacidad', 'Discapacidad') !!}
	{!! Form::select('discapacidad',\cud\Disca::orderBy('nombre')->pluck('nombre','id') ,null ,['class' => 'form-control']) !!}
</div>

<div class="form-goup">
	{!! Form::label('email', 'Correo electronico') !!}
	{!! Form::text('email', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('obrasocial', 'Obra social') !!}
	{!! Form::select('obrasocial',\cud\Obrasocial::orderBy('id')->pluck('nombre','id'),$person->obrasocial->id,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('estudio', 'Estudio') !!}
	{!! Form::select('estudio', \cud\Estudio::orderBy('id')->pluck('nombre','id') ,$person->estudio->id,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('trabajo', 'Trabajo') !!}
	{!! Form::select('trabajo', \cud\Trabajo::orderBy('id')->pluck('nombre','id') ,$person->trabajo->id,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('adquirida','Adquirida?') !!}
	{!! Form::checkbox('adquirida') !!}
</div>

<div class="form-group">
	{!! Form::label('fechadisca','Fecha de Amputacion') !!}
	{!! Form::date('fechadisca',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('status','Activo') !!}
	{!! Form::checkbox('status') !!}
</div>

<div class="form-grop">
	{!! Form::label('avatar','Foto') !!}
	{!! Form::file('avatar') !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>
