<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{

    public function index()
    {
        $peopleList = People::all();
        return view('people/index', ['peopleList'=>$peopleList]);
    }

    public function create()
    {
        return view('people/form');
    }


    public function store(Request $r)
    {
       $people = new People($r->all());


       if($imagen = $r->file('photo')){

            $nombreImagen = $imagen->getClientOriginalName();

            $imagen->move('imagesPeople', $nombreImagen);

            $people->photo = $nombreImagen;

    }


        $people->save();
        return redirect()->route('people.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $people = People::find($id);
        return view('people/form', array('people'=>$people));


    }


    public function update(Request $r)
    {
       $people = People::find($r->id);
       $people->fill($r->all());


       if($imagen = $r->file('photo')){

        $nombreImagen = $imagen->getClientOriginalName();

        $imagen->move('imagesPeople', $nombreImagen);

        $people->photo = $nombreImagen;

        }
        $people->save();

        return redirect()->route('people.index');

    }


    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();
        return redirect()->route('people.index');
    }
}
