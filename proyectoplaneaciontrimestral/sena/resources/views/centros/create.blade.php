@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1 class="lead">
        <i class="fa fa-plus">
        </i>
        Adicionar Centro
        <a class="btn btn btn-info pull-right" href="{{ route('centros.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>
    </h1>
    <hr>
        @include('centros.fragment.error')
		
		{!! Form::open(['route' => 'centros.store']) !!}
			
			@include('centros.fragment.form')
			
		{!! Form::close() !!}
    </hr>
</div>
<div class="col-sm-4">
    @include('centros.fragment.aside')
</div>
@endsection
