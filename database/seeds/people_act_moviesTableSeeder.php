<?php

use Illuminate\Database\Seeder;

class people_act_moviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_act_movies')->insert([
            'movie_id'=> '1',
            'people_id'=> '1',

        ]);


    }
}
