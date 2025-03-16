<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Descripción Alumno</title>
</head>
<body>
    <h1>Alumno # {{ $alumno->id }}</h1>

    <ul>
        <li>Nombre: {{ $alumno->Nombre }}</li>
        <li>Correo: {{ $alumno->Correo }}</li>
        <li>Fecha_Nacimiento: {{ $alumno->Fecha_Nacimiento }}</li>
        <li>Ciudad: {{ $alumno->Ciudad }}</li>

    </ul>
    <p>
        Alumno: <br>
        {{ $alumno->alumno }}
    </p>
</body>
</html>