<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\camposMovie;

use App\Movie;
use App\Genre;
use App\People;


class MovieController extends Controller
{

    public function index()
    {
      $movieList = Movie::all()->sortByDesc('year');
      //$movieList = $movieOrder->sortBy('name');
     return view('movie/index', ['movieList' => $movieList]);
      //  return view('movie/one2', ['movieList' => $movieList]);
    }
    public function create()
    {
        $genreList = Genre::all();
        $peopleList= People::all();

        return view('movie/form',['genreList' => $genreList], ['peopleList'=>$peopleList]);
    }

    public function store(camposMovie $r)
    {
        $movie = new Movie($r->all());

        //$this->validate($r,['name'=>'required'])

        if($imagen = $r->file('cover')){

            $nombreImagen = $imagen->getClientOriginalName();

            $imagen->move('images', $nombreImagen);

            $movie->cover = $nombreImagen;
        }
            $movie->save();
            $movie->genres()->attach($r->genre);
            $movie->peopleAct()->attach($r->cast);
            $movie->peopleDirect()->attach($r->direction);

        return redirect()->route('movie.index');
    }
    public function show($id)
    {
        $movie = Movie::find($id);
       // dd($movie);
        $genreList = Genre::all();
        $peopleList = People::all();

        return view('movie/one', array('movie'=>$movie, 'genreList'=>$genreList, 'peopleList'=>$peopleList));
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        //dump($movie);
        $genreList = Genre::all();
        $peopleList = People::all();

        return view('movie/form', array('movie'=>$movie, 'genreList'=>$genreList, 'peopleList'=>$peopleList));

    }
    public function update(Request $r)
    {
        $movie = Movie::find($r->id);
        $movie->fill($r->all());


        if($imagen = $r->file('cover')){

            $nombreImagen = $imagen->getClientOriginalName();


            $imagen->move('images', $nombreImagen);

            $movie->cover = $nombreImagen;
        }
            $movie->save();
            $movie->genres()->sync($r->genre);
            $movie->peopleAct()->sync($r->cast);
            $movie->peopleDirect()->sync($r->direction);

        return redirect()->route('movie.index');

    }
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->genres()->detach();
        $movie->peopleAct()->detach();
        $movie->peopleDirect()->detach();
        $movie->delete();


        return redirect()->route('movie.index');
    }
}
