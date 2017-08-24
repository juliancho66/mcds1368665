@extends('layout')

@section('content')
<div class="col-sm-8">
    <h1>
        {{$especialidad->nombre}}
        <a class="btn btn-info btn-lg pull-right" href="{{ route('especialidads.edit',$especialidad->id)}}">
            <i class="fa fa-pencil-square-o">
            </i>
        </a>
    </h1>
    <h2>
        {{$especialidad->descripcion}}
    </h2>
    <p>
        {{$especialidad->short}}
    </p>
    {!! $especialidad->body !!}
</div>
<div class="col-sm-4">
    @include ('especialidads.fragment.aside')
</div>
@endsection
