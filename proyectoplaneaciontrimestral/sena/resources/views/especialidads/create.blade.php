@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1 class="lead">
        <i class="fa fa-plus">
        </i>
        Adicionar Especialidad
        <a class="btn btn btn-info pull-right" href="{{ route('especialidads.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>
    </h1>
    <hr>
        @include('especialidads.fragment.error')
		
		{!! Form::open(['route' => 'especialidads.store']) !!}
			
			@include('especialidads.fragment.form')
			
		{!! Form::close() !!}
    </hr>
</div>
<div class="col-sm-4">
    @include('especialidads.fragment.aside')
</div>
@endsection
