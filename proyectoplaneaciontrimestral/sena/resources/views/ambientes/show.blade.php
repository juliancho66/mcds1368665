@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1>
        {{$ambiente->nombre}}
        <a class="btn btn-info btn-lg pull-right" href="{{ route('ambientes.edit',$ambiente->id)}}">
            <i class="fa fa-pencil-square-o">
            </i>
        </a>
    </h1>
    <h2>
        {{$ambiente->descripcion}}
    </h2>
    <p>
        {{$ambiente->short}}
    </p>
    {!! $ambiente->body !!}
</div>
<div class="col-sm-4">
    @include ('ambientes.fragment.aside')
</div>
@endsection
