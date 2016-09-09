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
    	$data = array(
			[
				'name' 		=> 'Alan', 
				'last_name' => 'Hernandez', 
				'email' 	=> 'this.alan856@gmail.com', 
				'username' 		=> 'AlanHedz',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Adela', 
				'last_name' => 'Torres', 
				'email' 	=> 'adela@correo.com', 
				'user' 		=> 'adela',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'normal',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
		);
		User::insert($data);
    }
}
