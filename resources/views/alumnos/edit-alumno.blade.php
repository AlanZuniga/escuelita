<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Editar alumno # {{ $alumno->id }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $alumno->nombre }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="Correo">Correo</label>
        <input type="email" name="correo" value="{{ $alumno->correo }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="Fecha_Nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="Fecha_Nacimiento" value="{{ $alumno->Fecha_Nacimiento }}">
        @error('Fecha_Nacimiento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="Ciudad">Ciudad</label>
        <input type="text" name="Ciudad" value="{{ $alumno->Ciudad }}">
        @error('Ciudad')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>