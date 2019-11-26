
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PERSONAS </h2> -->

@endsection

@section('contenido')

<form action= "{{route('people.create')}}" method= "GET">
        @csrf
        @method("GET|HEAD")
        <input type="submit" value="Insertar">
    </form>

    <table  class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Id</th><th>Nombre</th><th>Foto</th><th>ExternalUrl</th><th>Accion1</th><th>Accion2</th>
                </tr>
            </thead>

    @foreach ($peopleList as $people)
                <tr>
                        <td>{{$people->id}}</td>
                        <td>{{$people->name}}</td>
                        <td><img src="imagesPeople/{{$people->photo}}" width="30px"/></td>
                        <!-- <td>{{$people->photo}}</td> -->
                        <td>{{$people->externalurl}}</td>

                        <td style = "margin: 0 auto;"> <form action="{{route('people.edit',$people->id)}}" method="GET">
                                @csrf
                                @method("GET|HEAD")
                                <input type="submit" margin=" 0 auto" value="Modificar">
                            </form>
                        </td>

                        <td style = "margin: 0 auto;"><form action= "{{route('people.destroy',$people->id)}}" method= "POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit"  value="Borrar">
                            </form>
                        </td>
                </tr>
    @endforeach
    </table>

    <br>



@endsection

@section('pie')


@endsection


