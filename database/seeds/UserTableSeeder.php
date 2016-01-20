<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(array(
            'name'      => 'test',
            'last_name' => 'seed',
            'email'     => 'test@gmail.com',
            'password'  => \Hash::make('123456'),
            'type'      => 'user'
        ));
    }
}