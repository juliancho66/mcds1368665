<div class="form-group">
    {!! Form::label('nomnbre','Nombre del Centro') !!}
	{!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion','Descripcion del Centro') !!}
	{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-success btn-block']) !!}
</div>