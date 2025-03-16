<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista_alumnos</title>
</head>
<body>
    <h1>Alumnos Recibidos</h1>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha_Nacimiento</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
        
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->Nombre}}</td>
            <td>{{$alumno->Correo}}</td>
            <td>{{$alumno->Fecha_Nacimiento}}</td>
            <td>{{$alumno->Ciudad}}</td>
            <td>
                <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a>
                <a href="{{ route('alumnos.show', $alumno->id) }}">Mostrar</a>
            </td>
        </tr>
        @endforeach

    </table>
    
</body>
</html>