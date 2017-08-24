<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        		[
        			"name" =>"julian",
        			"email"=>"julianherrera66@hotmail.com",
        			"password"=>bcrypt('123456'),			
        		],
        		[
        			"name" =>"maria",
        			"email"=>"maria@hotmail.com",
        			"password"=>bcrypt('123456789'),			
        		]
        	]);

    }
}
