
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PELÍCULAS </h2> -->

@endsection

@section('contenido')
@auth
<button type="button" class="btn btn-outline-primary">Logout</button>
@endauth
@guest
<button type="button" class="btn btn-outline-primary">Login</button>
@endguest

<div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    <div class="row" >
        @foreach ($movieList as $movie)

            <div class="col-sm-2">

                <div class="card-deck">

                    <div class="card">

                        <img src="/images/{{$movie->cover}}" class="card-img-top">

                            <div class="card-body">

                                <table class="table table-borderless table-responsive">

                                    <tr><td><b>{{$movie->title}}</b></td></tr>
                                    <tr><td>{{$movie->year}}</td></tr>
                                    <tr><td>{{$movie->rating}}</td></tr>
                                        <td style = "margin: 0 auto;"> 
                                            <form action="{{route('movie.show',$movie->id)}}" method="GET">
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

                                </td>

                                </table>


                            </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>





@endsection

@section('pie')


@endsection


