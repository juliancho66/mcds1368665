@extends('layout')

@section('content')
<div class="col-sm-8">
    <h2>
        Editar ambiente
        <a class="btn btn btn-info pull-right" href="{{ route('ambientes.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>
    </h2>
    @include('ambientes.fragment.error')
		
		{!! Form::model($ambiente, ['route' => ['ambientes.update', $ambiente->id], 'method' => 'PUT']) !!}
			
			@include('ambientes.fragment.form')
			
		{!! Form::close() !!}
</div>
<div class="col-xs-12 col-sm-4">
    @include('ambientes.fragment.aside')
</div>
@endsection
