<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
</head>
<body>
    @foreach ($alumnos as $alumno)
        <h1>Nombre: {{$alumno->nombre}} </h1>
        <h1>Apellido: {{$alumno->apellido}}</h1>
        <br>
    @endforeach
</body>
</html>