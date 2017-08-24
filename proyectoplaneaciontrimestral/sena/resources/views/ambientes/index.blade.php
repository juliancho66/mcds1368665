@extends('layout')

@section('content')
<div class="col-xs-10">
<h3 class="page-header text-center">
                        Ambientes
                        
                    </h3>
    <hr>
        <a class="btn btn-success" href="{{url('ambientes/create')}}">
            <i class="fa fa-plus">
            </i>
            Adicionar Ambiente
        </a>
        @include ('ambientes.fragment.info')
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th width="20px">
                        Id
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Estado
                    </th>
                    <th>
                        Descripcion
                    </th>
                    <th colspan="3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ambientes as $ambiente)
                <tr>
                    <td>
                        {{$ambiente->id}}
                    </td>
                    <td>
                        {{$ambiente->nombre}}
                    </td>
                    <td>
                        {{$ambiente->estado}}
                    </td>
                    <td>
                        <strong>
                            {{$ambiente->descripcion}}
                        </strong>
                        {{ $ambiente->short}}
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('ambientes.show',$ambiente->id)}}">
                            <i class="fa fa-search">
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('ambientes.edit',$ambiente->id)}}">
                            <i class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('ambientes.destroy',$ambiente->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-lg ">
                                    <i class="fa fa-trash-o">
                                    </i>
                                </button>
                            </input>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $ambientes->render()!!}
    </hr>
</div>
<div class="col-sm-2">
    @include ('ambientes.fragment.aside')
</div>
@endsection
