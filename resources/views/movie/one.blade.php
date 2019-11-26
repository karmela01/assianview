
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PELÍCULAS </h2> -->

@endsection

@section('contenido')


<div class="container">

        <div class="float-right">
                <button type="button" class="btn btn-secondary" onclick="inicio()">Inicio</button>
        </div><br>

    <div class="row" >
        @isset($movie)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/images/{{$movie->cover}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless table-responsive">
                        <tr><td><b>Título</b></td><td>{{$movie->title}}</td></tr>
                        <tr><td><b>Año</b></td><td>{{$movie->year}}</td></tr>
                        <tr><td><b>Duración</b></td><td>{{$movie->duration}}.min</td></tr>
                        <tr><td><b>Valoración</b></td><td>{{$movie->rating}}</td></tr>
                        <tr><td><b>Género</b></td><td>
                            @foreach($movie->genres as $genre)
                                {{$genre->description}}
                            @endforeach
                        </td></tr>
                        <tr><td><b>Director</b></td><td>
                            @foreach($movie->peopleDirect as $director)
                                {{$director->name}}
                            @endforeach
                        </td></tr>
                        <tr><td><b>Reparto</b></td><td>
                            @foreach($movie->peopleAct as $actor)
                                {{$actor->name}}
                            @endforeach
                        </td></tr>
                        
                        <td style = "margin: 0 auto;"> 
                            <form action="{{route('movie.edit',$movie->id)}}" method="GET">
                            @csrf
                            @method("GET|HEAD")
                            <input type="submit" class="btn btn-primary" margin=" 0 auto" value="Modificar">
                            </form>
                        </td>
                        <td>
                            <form action= "{{route('movie.destroy',$movie->id)}}" method= "POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger"  value="Borrar">
                            </form>
                        </td>

                    </table>

                </div>
              </div>
            </div>
          </div>
        @endisset

    </div>

</div>

@endsection

@section('pie')


@endsection


