<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('regiones')->insert([
        		[
        			"id_region" =>"001",
        			"nombre"=>"Norte",
        						
        		],
        		[
        			"id_region" =>"002",
        			"nombre"=>"Alto de Occidente",		
        		]
        	]);

    }
}