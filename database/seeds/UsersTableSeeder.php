<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $data = [
            'name'=>'Cuong',
            'email'=>'cuong@gmail.com',
            'image'=>"default.jpg",
            'password'=>Hash::make('12345678')
        ];


        DB::table('users')->insert($data);
    }
}
