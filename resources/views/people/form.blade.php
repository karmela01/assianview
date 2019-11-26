@extends('layouts.master')

    @section ('cabecera')

        <h2 align = 'center'> FORMULARIO DE INSERCIÓN </h2>

    @endsection

    @section("contenido")

        @isset($people)

        <form enctype='multipart/form-data' action="{{route('people.update',['id'=>$people->id]) }}" method="POST">

            @method("PUT")
        @else
            <form enctype='multipart/form-data' action="{{route('people.store')}}" method="POST">
        @endisset
            @csrf
                <fieldset>
                    <legend><b> Personas </b></legend>
                        <label for="name" >Nombre</label>
                            <input type="text" name="name" id="name" value= "{{$people->name??''}}">

                        <label for = 'photo'>Foto</label>
                            <input type='hidden' name='MAX_FILE_SIZE' value='8000000' >
                            <input type="file" name="photo" id = 'photo' >

                        <label for = 'external_url'>Externalurl</label>
                            <input type="text"  name="external_url" id = 'external_url' value= '{{$people->external_url??''}}'><br>




                    <input type="submit" value="Enviar">
                </fieldset>
            </form>

    @endsection

    @section('pie')


    @endsection
 {{--}}
                    LO GUARDO PARA CUANDO EMPIECE CON DIRECTORES Y ACTORES
                    <select name="genre[]"  multiple>
                            @foreach ($genreList as $genre)

                            intentamos que los campos de género que corresponden a esa película
                            aparezcan marcados, pero no resulta. $movie->genres no es un array, sino
                            una colección. MIRARLO!!!!!!!!!!

                            @if (in_array($genre, $movie->genres->toArray()))
                            <option  value="{{$genre->id}}" selected >{{$genre->description}}</option>
                        @else

                        @endif

                             <option  value="{{$genre->id}}">{{$genre->description}}</option>
                            @endforeach
                        </select><br><br><br>
                    {{--}}
