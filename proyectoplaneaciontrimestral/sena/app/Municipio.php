an<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Municipio extends Model
{
	protected $table ='municipios';
	protected $fillable = ['nombre','id_region'];

	public static function municipios($id){
		 return Municipio::where ('id_region','=',$id_region)->get();
	}
}