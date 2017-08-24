<?php

use Illuminate\Database\Seeder;
use App\Especialidad;

class EspecialidadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Especialidad::class,80)->create();
    }
}
