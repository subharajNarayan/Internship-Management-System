<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' 		=> 'Subharaj Narayan Chaudhary',
            'image'     => 'subharaj.jpg',
        	'gender'	=> 'Male',
        	'age'		=> 22,
        	'address'	=> 'Duhabi, Sunsari',
        	'phone'		=> '9819319611',
        	'dob'		=> '1996-12-27',
        	'email'		=> 'subharazzchy68@gmail.com',
        	'password'	=> bcrypt('password'),
        	'is_admin'	=> 1
        ]);
    }
}
