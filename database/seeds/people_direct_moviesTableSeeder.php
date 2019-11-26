<?php

use Illuminate\Database\Seeder;

class people_direct_moviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_direct_movies')->insert([
            'movie_id'=> '2',
            'people_id'=> '2',

        ]);
    }
}
