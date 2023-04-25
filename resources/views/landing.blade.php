<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas, vistas y controladores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h2 class ="ms-3 mt-3">Calendario academico</h2>
    <hr>
    <h2 class ="ms-3">Inicio y finalizacion de cursada por cuatrimestre </h2>
    <br>
    <a class="btn btn-primary btn-lg ms-3" href="{{ route('calendario')}}">Calendario</a></button>
    <br>
    <hr>
    <h2 class="ms-3">Carerras</h2>
    <hr>
    <h2 class="ms-3">Oferta acedémica 2023</h2>
    <a class="btn btn-primary btn-lg ms-3" href="{{ route ('carreras') }}">Carreras</a></button>
    <hr>
</body>
</html>