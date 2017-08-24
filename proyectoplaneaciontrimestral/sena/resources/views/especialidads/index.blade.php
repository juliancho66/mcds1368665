@extends('layout')

@section('content')
<div class="col-xs-10">
<h3 class="page-header text-center">
                       Especialidades
                        
                    </h3>
    <hr>
        <a class="btn btn-success" href="{{url('especialidads/create')}}">
            <i class="fa fa-plus">
            </i>
            Adicionar Especialidad
        </a>
        @include ('especialidads.fragment.info')
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
                @foreach($especialidads as $especialidad)
                <tr>
                    <td>
                        {{$especialidad->id}}
                    </td>
                    <td>
                        {{$especialidad->nombre}}
                    </td>
                    <td>
                        <strong>
                            {{$especialidad->descripcion}}
                        </strong>
                        {{ $especialidad->short}}
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('especialidads.show',$especialidad->id)}}">
                            <i class="fa fa-search">
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-info btn-lg " href="{{ route('especialidads.edit',$especialidad->id)}}">
                            <i class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('especialidads.destroy',$especialidad->id) }}" method="POST">
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
        {!! $especialidads->render()!!}
    </hr>
</div>
<div class="col-sm-2">
    @include ('especialidads.fragment.aside')
</div>
@endsection
