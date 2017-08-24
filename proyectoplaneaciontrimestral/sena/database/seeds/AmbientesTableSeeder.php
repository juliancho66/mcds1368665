<?php

use Illuminate\Database\Seeder;
use App\Ambiente;

class AmbientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(ambiente::class,80)->create();
    }
}
