<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/lista-alumnos.css') }}" type="text/css">
</head>


<body class="flex justify-center items-center min-h-screen bg-gray-100">

@if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-6">Alumnos Recibidos</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('alumnos.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Crear nuevo alumno</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow-md rounded-lg">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Nombre</th>
                        <th class="p-3 text-left">Correo</th>
                        <th class="p-3 text-left">Fecha de Nacimiento</th>
                        <th class="p-3 text-left">Ciudad</th>
                        <th class="p-3 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-3">{{$alumno->id}}</td>
                        <td class="p-3">{{$alumno->Nombre}}</td>
                        <td class="p-3">{{$alumno->Correo}}</td>
                        <td class="p-3">{{$alumno->Fecha_Nacimiento}}</td>
                        <td class="p-3">{{$alumno->Ciudad}}</td>
                        <td class="p-3 flex space-x-2">
                            <a href="{{ route('alumnos.edit', $alumno) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Editar</a>
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="px-3 py-1 bg-blue-400 text-white rounded hover:bg-blue-500">Mostrar</a>
                            <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
