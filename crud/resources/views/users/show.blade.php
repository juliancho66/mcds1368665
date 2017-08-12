@extends('layouts.app')
@section('title','adicionar usuario')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
				<li><a href="{{url('/') }}">Lista de Usuarios</a></li>
				<li class="active">consultar usuario </li>
			</ol>
			<h1 class="lead"><i class= "fa fa-search"></i>consultar usuario </h1>
			<hr>
			
			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<td>{{ $usr->id}}</td>
				</tr>
				<tr>
					<th>NOMBRE</th>
					<td>{{ $usr->name}}</td>
				</tr>
				<tr>
					<th>CORREO ELECTRONICO</th>
					<td>{{ $usr->email}}</td>
				</tr>
				<tr>
					<th>ROL</th>
					<td>{{ $usr->role}}</td>
				</tr>
				<tr>
					<th>FOTO</th>
					<td><img src="{{ asset($usr->photo)}}" width="160px"></td>
				</tr>
				<tr>
					<th>FECHA DE CREACION </th>
					<td>{{ $usr->created_at}}</td>
				</tr>
				<tr>
					<th>FECHA DE ACTUALIZACION</th>
						<td>{{ $usr->updated_at}}</td>
				</tr>
				
				
			</table>
		</div>
	</div>
@endsection