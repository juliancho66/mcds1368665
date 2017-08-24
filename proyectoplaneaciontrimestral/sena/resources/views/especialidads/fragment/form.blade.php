<div class="form-group">
    {!! Form::label('nomnbre','Nombre de la Especialidad') !!}
	{!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion','Descripcion de la Especialidad') !!}
	{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-success btn-block']) !!}
</div>