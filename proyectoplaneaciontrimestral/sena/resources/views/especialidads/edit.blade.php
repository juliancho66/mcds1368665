@extends('layout')

@section('content')
<div class="col-sm-8">
    <h2>
        Editar Especialidad
        <a class="btn btn btn-info pull-right" href="{{ route('especialidads.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>
    </h2>
    @include('especialidads.fragment.error')
		
		{!! Form::model($especialidad, ['route' => ['especialidads.update', $especialidad->id], 'method' => 'PUT']) !!}
			
			@include('especialidads.fragment.form')
			
		{!! Form::close() !!}
</div>
<div class="col-xs-12 col-sm-4">
    @include('especialidads.fragment.aside')
</div>
@endsection



