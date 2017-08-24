<div class="form-group">
    {!! Form::label('nomnbre','Nombre del Ambiente') !!}
	{!! Form::text('nombre',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('estado','Estado  del Ambiente') !!}
    {!!Form:: select('estado')!!}
</div>
<div class="form-group">
    {!! Form::label('descripcion','Descripcion del Ambiente') !!}
	{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::submit('Guardar',['class'=>'btn btn-success btn-block']) !!}
</div>