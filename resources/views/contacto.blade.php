<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/alumnos" method="POST"> @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" value="{{ old('correo') }}">
        <br>
        <label for="Fecha_Nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="Fecha_Nacimiento" value="{{ old('Fecha_Nacimiento') }}">
        <br>
        <label for="Ciudad">Ciudad</label>
        <input type="text" name="Ciudad" value="{{ old('Ciudad') }}">
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>