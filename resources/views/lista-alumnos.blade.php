<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista_alumnos</title>
</head>
<body>
    <h1>Alumnos Recibidos</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha_Nacimiento</th>
        </tr>
        
        @foreach ($alumnos as $alumno)
        </tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->Nombre}}</td>
            <td>{{$alumno->Correo}}</td>
            <td>{{$alumno->Fecha_Nacimiento}}</td>
            <td>{{$alumno->created_at }}</td>
        </tr>
        @endforeach

    </table>
    
</body>
</html>