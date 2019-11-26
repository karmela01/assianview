
@extends('/layouts/master')

@section ('cabecera')

    <h1 align = 'center'>  USUARIOS </h1>

@endsection

@section('contenido')

<table  class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>Id</th><th>Nombre</th><th>Email</th><th>Contraseña</th><th>Accion1</th><th>Accion2</th>
            </tr>
        </thead>

@foreach ($userList as $user)
            <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>

                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td> <a href="{{route('user.edit',$user->id)}}">Modificar</a></td>
                    <td><form action= "{{route('user.destroy',$user->id)}}" method= "POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
            </tr>
@endforeach
</table>
<br><br/>
<a href="{{route('user.create')}}">Insertar</a>
@endsection

@section('pie')


@endsection


