@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1>
        {{$centro->nombre}}
        <a class="btn btn-info btn-lg pull-right" href="{{ route('centros.edit',$centro->id)}}">
            <i class="fa fa-pencil-square-o">
            </i>
        </a>
    </h1>
    <h2>
        {{$centro->descripcion}}
    </h2>
    <p>
        {{$centro->short}}
    </p>
    {!! $centro->body !!}
</div>
<div class="col-sm-4">
    @include ('centros.fragment.aside')
</div>
@endsection
