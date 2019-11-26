<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'name','photo','external_url',
    ];
    public function moviesAct(){

        return $this->belongsToMany('App\Movie','people_act_movies', 'people_id', 'movie_id');

    }
    public function moviesDirect(){
        return $this->belongsToMany('App\Movie','people_direct_movies','people_id', 'movie_id');
    }
}
