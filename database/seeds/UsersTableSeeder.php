<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'kazooba Ivan',
            'roles'=>'1', 
            'email'=>'kagburg@gmail.com', 
            'password'=>Hash::make('12345678'),
            'emp_pin'=>'1',
        ]);
    }
}
