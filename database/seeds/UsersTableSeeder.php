<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
				'name'     => 'Martin Knudsen',
				'email'    => 'admin@webkenth.dk',
				'password' => bcrypt('password')
			]);
		User::create([
				'name'     => 'Morten Gregersen',
				'email'    => 'mooorten@gmail.com',
				'password' => bcrypt('password')
			]);
		User::create([
				'name'     => 'Kristian Jacobsen',
				'email'    => 'thyholm1985@gmail.com',
				'password' => bcrypt('password')
			]);

	}
}
