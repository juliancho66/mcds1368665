@extends('layout')

@section('content')
<div class="col-sm-8">
    <h2>
        Editar Centro
        <a class="btn btn btn-info pull-right" href="{{ route('centros.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>
    </h2>
    @include('centros.fragment.error')
		
		{!! Form::model($centro, ['route' => ['centros.update', $centro->id], 'method' => 'PUT']) !!}
			
			@include('centros.fragment.form')
			
		{!! Form::close() !!}
</div>
<div class="col-xs-12 col-sm-4">
    @include('centros.fragment.aside')
</div>
@endsection



