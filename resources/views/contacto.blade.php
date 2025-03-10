<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <form action="/crear-contacto" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo">
        <br>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>