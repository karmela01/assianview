
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PELÍCULAS </h2> -->

@endsection

@section('contenido')


<div class="container-fuid">

    <div class="row" >
        @isset($movie)

            <div class="col-sm-2">

                <div class="card-deck">

                    <div class="card">

                        <img src="/images/{{$movie->cover}}" class="card-img-top">

                            <div class="card-body">

                                <table class="table table-borderless table-responsive">
                                    <tr><td>{{$movie->title}}</td></tr>
                                    <tr><td>{{$movie->year}}</td></tr>
                                    <tr><td>{{$movie->duration}}.min</td></tr>
                                    <tr><td>{{$movie->rating}}</td></tr>
                                    <tr><td>{{$movie->filename}}</td></tr>
                                    <tr><td>{{$movie->filepath}}</td></tr>
                                    <tr><td>{{$movie->externalurl}}</td></tr>
                                    <td style = "margin: 0 auto;"> <form action="{{route('movie.show',$movie->id)}}" method="GET">
                                        @csrf
                                        @method("GET|HEAD")
                                        <input type="submit" margin=" 0 auto" value="Modificar">
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


