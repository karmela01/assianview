
@extends('/layouts/master')

@section ('cabecera')

     <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR GÉNEROS </h2> -->

@endsection

@section('contenido')

<table  class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Id</th><th>Descripción</th><th>Accion1</th><th>Accion2</th>
                </tr>
            </thead>

    @foreach ($genreList as $genre)
                <tr>
                        <td>{{$genre->id}}</td>
                        <td>{{$genre->description}}</td>

                        <td style = "margin: 0 auto;"> <form action="{{route('genre.edit',$genre->id)}}" method="GET">
                                @csrf
                                @method("GET|HEAD")
                                <input type="submit" margin=" 0 auto" value="Modificar">
                            </form>
                        </td>

                        <td style = "margin: 0 auto;"><form action= "{{route('genre.destroy',$genre->id)}}" method= "POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit"  value="Borrar">
                            </form>
                        </td>
                </tr>
    @endforeach
    </table>

    <br>

    <form action= "{{route('genre.create')}}" method= "GET">
            @csrf
            @method("GET|HEAD")
            <input type="submit" value="Insertar">
        </form>

@endsection

@section('pie')


@endsection


