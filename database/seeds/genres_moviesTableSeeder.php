<?php

use Illuminate\Database\Seeder;

class genres_moviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres_movies')->insert([
            'movie_id'=>'1',
            'genre_id'=>'2',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'1',
            'genre_id'=>'7',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'2',
            'genre_id'=>'1',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'2',
            'genre_id'=>'3',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'2',
            'genre_id'=>'4',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'3',
            'genre_id'=>'2',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'3',
            'genre_id'=>'7',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'4',
            'genre_id'=>'1',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'4',
            'genre_id'=>'3',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'4',
            'genre_id'=>'5',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'5',
            'genre_id'=>'1',
        ]);
        DB::table('genres_movies')->insert([
            'movie_id'=>'5',
            'genre_id'=>'4',
        ]);
    }
}