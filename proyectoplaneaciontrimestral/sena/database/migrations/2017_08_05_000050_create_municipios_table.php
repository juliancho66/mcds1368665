<?php  

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('municipios', function(Blueprint $table){
          $table->increments('id_municipio');
          $table->string('nombre', 20);
          $table->integer('id_region')->unsigned ();
          $table->foreign('id_region')->references ('id_region')->on('regiones');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('municipios');
    }
}
