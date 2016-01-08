<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('user')->delete();
		User::create(array(
			'first_name' => 'John',
			'last_name' => 'Doe',
			'email' => 'johndoe@example.net',
			'password' => 'mypass',
		));
	}

}