@extends('layouts.app')
@section('title','Modificar usuario')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
				<li><a href="{{url('/') }}">Lista de Usuarios</a></li>
				<li class="active">Modificar Usuario </li>
			</ol>
			<h1 class="lead"><i class= "fa fa-pencil"></i> Modificar usuario </h1>
			<hr>
			@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form action="{{url('user/'.$usr->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				{{method_field('PUT') }}
				<div class="form-group">
					<input type="text" name="name" class="form-control" value="{{$usr->name}}"
					placeholder="nombre completo">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" value="{{$usr->email}}"
					placeholder="correo electronico">
			    </div>
				<div class="form-group">
			  		<select name="role" class="form-control">
						<option value="">seleccione rol ...</option>
						<option value="admin"    @if($usr->role=='admin')    selected  @endif>  administrador ...</option>
						<option value="customer" @if($usr->role=='customer') selected  @endif>  cliente ...</option>
					</select>
				</div>
				<div class= "form-group">
					<input type="file" class="hide" name="photo" id="upload" acept="images/*">
					<button type="button" class ="btn btn-default btn-block" id= "doUpload">
						<i class="fa fa-upload"></i> subir foto
					</button>
				</div>
				<div class= "form-group">
				<button type="submit" class ="btn btn-success btn-block" >
						<i class="fa fa-save"></i> Modificar
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection