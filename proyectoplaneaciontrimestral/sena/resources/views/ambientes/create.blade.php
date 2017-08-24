@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1 class="lead">
        <i class="fa fa-plus">
        </i>
        Adicionar Ambiente
        <a class="btn btn btn-info pull-right" href="{{ route('ambientes.index') }}">
            <i aria-hidden="true" class="fa fa-undo">
                Regresar
            </i>
        </a>

    </h1>
    <hr>
        @include('ambientes.fragment.error')
		
		{!! Form::open(['route' => 'ambientes.store']) !!}
			
			@include('ambientes.fragment.form')
			
		{!! Form::close() !!}


    </hr>
       
</div>             
<div class="col-sm-4">
    @include('ambientes.fragment.aside')
</div>
@endsection
