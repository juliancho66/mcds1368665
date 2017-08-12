@extends('layouts.app')
@section('title','adicionar usuario')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ol class="breadcrumb">
				<li><a href="{{url('/') }}">Lista de Usuarios</a></li>
				<li class="active">adicionar usuario </li>
			</ol>
			<h1 class="lead"><i class= "fa fa-plus"></i>Adicionar usuario </h1>
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
			<form action="{{url('user')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<input type="text" name="name" class="form-control" value="{{old('name')}}"
					placeholder="nombre completo">
				</div>
				<div class="form-group">
					<input type="email" id="email" name="email" class="form-control" value="{{old('email')}}"
					placeholder="correo electronico">
					<span id="check" class="fa form-control-feedback"></span>
					
			    </div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" value="{{old('password')}}"
					 placeholder="contraseña">
				</div>
				<div class="form-group">
			  		<select name="role" class="form-control">
						<option value="">seleccione rol ...</option>
						<option value="admin" @if(old('role')=='Admin') select @endif>administrador ...</option>
						<option value="customer" @if(old('role')=='customer') selected @endif>cliente ...</option>
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
						<i class="fa fa-save"></i> Guardar
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection