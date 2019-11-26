<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name'=> 'bong joon ho',
            'photo'=> 'bong joon ho.jpg',
            'external_url'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'hwang jung min',
            'photo'=> 'hwang jung min.jpg',
            'external_url'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'jun Kunimura',
            'photo'=> 'jun Kunimura.jpg',
            'external_url'=>'luego',

        ]);
        DB::table('people')->insert([
            'name'=> 'bna hong jin',
            'photo'=> 'na hong jin.jpg',
            'external_url'=>'luego',

        ]);
    }
}
