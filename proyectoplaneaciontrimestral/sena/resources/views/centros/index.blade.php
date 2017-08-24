@extends('layout')

@section('content')
<div class="col-xs-10">
<h3 class="page-header text-center">
                       Centros de Formacion
                        
                    </h3>
    <hr>
        <a class="btn btn-success" href="{{url('centros/create')}}">
            <i class="fa fa-plus">
            </i>
            Adicionar Centro
        </a>
        @include ('centros.fragment.info')
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
                        Descripcion
                    </th>
                    <th colspan="3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($centros as $centro)
                <tr>
                    <td>
                        {{$centro->id}}
                    </td>
                    <td>
                        {{$centro->nombre}}
                    </td>
                    <td>
                        <strong>
                            {{$centro->descripcion}}
                        </strong>
                        {{ $centro->short}}
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('centros.show',$centro->id)}}">
                            <i class="fa fa-search">
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('centros.edit',$centro->id)}}">
                            <i class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('centros.destroy',$centro->id) }}" method="POST">
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
        {!! $centros->render()!!}
    </hr>
</div>
<div class="col-sm-2">
    @include ('centros.fragment.aside')
</div>
@endsection
