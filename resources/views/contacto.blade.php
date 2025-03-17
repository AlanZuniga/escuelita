<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-blue-600 text-center mb-4">Registrar Nuevo Alumno</h2>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/alumnos" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="Nombre" class="block text-gray-700 font-medium">Nombre</label>
                <input type="text" name="Nombre" value="{{ old('nombre') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="Correo" class="block text-gray-700 font-medium">Correo</label>
                <input type="email" name="Correo" value="{{ old('correo') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="Fecha_Nacimiento" class="block text-gray-700 font-medium">Fecha de Nacimiento</label>
                <input type="date" name="Fecha_Nacimiento" value="{{ old('Fecha_Nacimiento') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="Ciudad" class="block text-gray-700 font-medium">Ciudad</label>
                <input type="text" name="Ciudad" value="{{ old('Ciudad') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div class="text-center">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>