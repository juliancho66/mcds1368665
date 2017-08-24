<?php

use Illuminate\Database\Seeder;
use App\Municipio;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Municipio::class,80)->create();
    }
}
