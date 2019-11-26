@extends('layouts.master')

    @section ('cabecera')

        <h1 align = 'center'> FORMULARIO INSERCIÓN GÉNEROS</h1>

    @endsection

    @section("contenido")

        @isset($genre)


        <form action="{{route('genre.update',['genre'=>$genre->id]) }}" method="POST">

            @method("PUT")
        @else
            <form action="{{route('genre.store')}}" method="POST">
        @endisset
            @csrf
            <fieldset>
                    <legend>Géneros</legend>

                <label for="description">Descripción</label>
                    <input type="text" name="description" id="description" value= "{{$genre->description??''}}"><br>


                    <input type="submit" value="Enviar">

            </fieldset>
            </form>

            @if(count($errors)>0)
            <ul>

                @foreach ($errors->all() as $errors)
                <li>
                    {{$errors}}
                </li>
                @endforeach
            </ul>

        @endif

    @endsection

    @section('pie')


    @endsection
