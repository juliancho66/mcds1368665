<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr=new User;
        $usr->name='jeremias';
        $usr->email='jeremias@hotmail.com';
        $usr->password=bcrypt('admin');
        $usr->role='admin';
        $usr->photo='img/photos/jeremias.png';
        $usr->save();

        User::create(array(
        	'name' =>'Homero Simpson',
        	'email' =>'Homero@hotmail.com',
        	'password' =>bcrypt('customer'),
        	'role' =>'customer',
        	'photo' =>'img/photos/homero.png',
        ));
    }
}
