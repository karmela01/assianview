@extends('layouts.master')

    @section ('cabecera')

        <h1 align = 'center'> Insertar Usuarios</h1>

    @endsection

    @section("contenido")

        @isset($user)


        <form action="{{route('user.update',['id'=>$user->id]) }}" method="POST">

            @method("PUT")
        @else
            <form action="{{route('user.store')}}" method="POST">
        @endisset
            @csrf
            <fieldset>
                    <legend>Usuarios</legend>

                <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value= "{{$user->name??''}}"><br>
              <!--  <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id='apellidos' value= '{{$user->apellidos??''}}'><br>
              -->
                <label for="email">email</label>
                    <input type="email" name="email" id = 'email' value= '{{$user->email??''}}'><br>
                <label for = 'password'>Password</label>
                    <input type="text" name="password" id = 'password' value= '{{$user->password??''}}'><br>

                    <input type="submit" >

            </fieldset>
            </form>

    @endsection

    @section('pie')


    @endsection
