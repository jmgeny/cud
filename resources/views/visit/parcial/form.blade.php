<div class="form-group">
	{!! Form::label('titulo','Titulo') !!}
	{!! Form::text('titulo',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripción') !!}
	{!! Form::textarea('descripcion', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>
