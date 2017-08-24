@extends('layouts.master')
	@section('content')
	{!!Form:: select('region', $regiones,null,['id_region'=>'region'])!!}
	{!!Form:: select('municipio', ['placeholder'=>'Selecciona'],null,['id_municipio'=>'municipio'])!!}
	@endsection