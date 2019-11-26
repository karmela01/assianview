<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\camposGenre;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
      $genreList = Genre::all();
      return view('genre/index',['genreList' =>$genreList]);
    }

    public function create()
    {
        return view('genre/form');
    }

    public function store(camposGenre $r)
    {
        $genre = new Genre;

        $genre->description = $r->description;

        $genre->save();

        return redirect()->route('genre.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $genre = Genre::find($id);
       return view('genre/form', array('genre'=>$genre));
    }


    public function update(Request $r)
    {
        $genre = Genre::find($r->id);
        $genre->fill($r->all());

        $genre->save();
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->route('genre.index');
    }
}
