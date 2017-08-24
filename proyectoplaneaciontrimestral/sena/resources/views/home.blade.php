@extends('layouts.app')
    @section('content')
<div class="container">
    <div class="row">
     <table>
        <tr>
            <td> <a  class="btn btn-success btn-block" href="{{route('centros.index')}}">
                <i  class="fa fa-hand-o-right">Centros de Formacion</i> </a>
            </td>       
    
            <td> <a class="btn btn-default btn-block" href="{{route('centros.index')}}">
                <i class="fa fa-hand-o-right">Instructores</i> </a>
            </td>    
              <td> <a class="btn btn-default btn-block" href="{{route('centros.index')}}">
                <i class="fa fa-hand-o-right">Fichas</i> </a>
            </td>  
            <td> <a class="btn btn-default btn-block" href="{{route('centros.index')}}">
                <i class="fa fa-hand-o-right">Grupos de Formacion</i> </a>
            </td> 
            <td> <a class="btn btn-success btn-block" href="{{route('ambientes.index')}}">
                <i class="fa fa-hand-o-right">Ambientes</i> </a>
            </td> 
            <td> <a class="btn btn-default btn-block" href="{{route('centros.index')}}">
                <i class="fa fa-hand-o-right">Areas de Competencia</i> </a>
            </td>  
            <td> <a  class="btn btn-success btn-block" href="{{route('especialidads.index')}}">
                <i  class="fa fa-hand-o-right">Especialidades</i> </a>
            </td>  
            <td> <a class="btn btn-default btn-block" href="{{route('centros.index')}}">
                <i class="fa fa-hand-o-right">Instituciones Asociadas</i> </a>
            </td>     
        </tr>
     </table>
        
    </div>
</div>
@endsection
