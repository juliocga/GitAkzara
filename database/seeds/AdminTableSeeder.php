<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     *  Creates administrator
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name'      => 'Eduardo',
            'last_name' => 'Guzman',
            'email'     => 'eduarguzher@gmail.com',
            'password'  => \Hash::make('123456'),
            'type'      => 'admin'
        ));
    }

}