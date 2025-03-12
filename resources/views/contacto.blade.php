<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <form action="/crear-contacto" method="POST">  <!--<{{ route('alumnos.store') }}!--->
        @csrf
        <label for="nombre"> Nombre</label>
        <input type="text" id="nombre" name="Nombre">
        <br>
        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="Correo"><br>
        <br>
        <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento"><br>
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>