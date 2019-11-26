<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title'=> 'parasitos',
            'year'=> '2019',
            'duration'=> '132',
            'rating'=> '4',
            'cover' =>'parasitos.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'the host',
            'year'=> '2010',
            'duration'=> '126',
            'rating'=> '3',
            'cover' =>'the host.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'jojos bizarre adventure',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'jojos bizarre adventure.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'shadow',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'sombra.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'la chica que saltaba a traves del tiempo',
            'year'=> '2010',
            'duration'=> '98',
            'rating'=> '3',
            'cover' =>'la chica que saltaba a traves del tiempo.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'monstrum',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'monstrum.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'rampant',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'rampant.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'spirits homecoming',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'spirits homecoming.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'tu nombre',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'tu nombre.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'the witness',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'the witness.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'time renegades',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'time renegades.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'tren a busan',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'tren a busan.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        DB::table('movies')->insert([
            'title'=> 'memorias de un asesino',
            'year'=> '2018',
            'duration'=> '110',
            'rating'=> '3',
            'cover' =>'memorias de un asesino.jpg',
            'filename' =>'algo',
            'filepath' =>'algo',
            'externalurl' =>'algo',
        ]);
        
    }
}
