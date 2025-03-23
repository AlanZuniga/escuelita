<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción Alumno</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/lista-alumnos.css') }}" type="text/css">
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-blue-600 text-center mb-4">Detalle del Alumno</h2>
        @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif
        <ul class="space-y-2 text-gray-700">
            <li><span class="font-semibold">Nombre:</span> {{ $alumno->Nombre }}</li>
            <li><span class="font-semibold">Correo:</span> {{ $alumno->Correo }}</li>
            <li><span class="font-semibold">Fecha de Nacimiento:</span> {{ $alumno->Fecha_Nacimiento }}</li>
            <li><span class="font-semibold">Ciudad:</span> {{ $alumno->Ciudad }}</li>
        </ul>
        <p class="mt-4 text-gray-700">
            <span class="font-semibold">Alumno:</span> 
            #{{ $alumno->id }}
        </p>
        <div class="mt-4 text-center">
            <a href="{{ route('alumnos.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Volver</a>
        </div>
    </div>
</body>
</html>
