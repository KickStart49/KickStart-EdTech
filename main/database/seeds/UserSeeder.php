<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'prahar',
        	'email' => 'pandyaprahar401@gmail.com',
        	'permission' => 'administrator',
        	'password' => bcrypt('php@4954')
        ]);
    }
}
