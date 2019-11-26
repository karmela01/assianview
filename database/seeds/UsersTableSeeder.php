<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'carmen',
            'email'=> 'carmen@mail.com',
            'password'=> '1234',
            //'password'=> Hash::make('1234'), para encriptar la contraseña
        ]);
        DB::table('users')->insert([
            'name'=> 'juan',
            'email'=> 'pepe@mail.com',
            'password'=> '3333',
        ]);
        DB::table('users')->insert([
            'name'=> 'luis',
            'email'=> 'luis@mail.com',
            'password'=> '3333',
        ]);
    }
}
