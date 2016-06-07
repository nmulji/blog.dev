<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->email = 'niraj.mulji@gmail.com';
		$user->password = 'password';
		$user->save();
	}
}
