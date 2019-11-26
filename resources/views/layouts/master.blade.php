

<!DOCTYPE html><html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>@yield('Titulo')</title>
 <!-- style -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <div class="cabecera">
           @include('layouts/navBar1')
           @yield ('cabecera')
    </div>

    <div class="contenido" style="margin-top:25px">

            @yield('contenido')
    </div>

    <div class="vista">
            @yield ('vista')

     </div>

    <footer class= "pie">
            @yield('pie')

             ©Carmen Castro 2º DAW




    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

        <!-- Styles
        <style>
            html, body {
                background-color: #DCDCDC;
                color:#000000;
                font-family: 'Nunito', sans-serif;

            }
            .cabecera{
                border-style: groove;
                border-color: darkslategrey;
                padding: 5px;
                margin: 25px 550px 40px 550px;
            }

            .contenido{
                align: center;
                font-size: 1em;

            }
            .vista{
                float: left;
                width: 25%;
            }


            input[type = submit]{
                cursor: pointer;

            }
            table{
                border-collapse: collapse;

            }
            table, th, td{
                border: 1px solid black;
            }
            tr:hover {
                background-color: #f5f5f5;
                }

            form{
                font-size: 1.25em;
            }

            label {
                display: inline-block;
                width: 100px;

            }
            input {
                display: inline-block;

                margin-bottom: 5px;
            }

            .pie{
                margin-bottom: 10px;
            }

        </style>
         -->