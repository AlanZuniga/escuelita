<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-blue-600 text-center mb-4">Editar Alumno # {{ $alumno->id }}</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="Nombre" class="block text-gray-700 font-medium">Nombre</label>
                <input type="text" name="Nombre" value="{{ $alumno->Nombre }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                @error('Nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <br>
            </div>
            <div>
                <label for="Correo" class="block text-gray-700 font-medium">Correo</label>
                <input type="email" name="Correo" value="{{ $alumno->Correo }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                @error('Correo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="Fecha_Nacimiento" class="block text-gray-700 font-medium">Fecha de Nacimiento</label>
                <input type="date" name="Fecha_Nacimiento" value="{{ $alumno->Fecha_Nacimiento }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                @error('Fecha_Nacimiento')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="Ciudad" class="block text-gray-700 font-medium">Ciudad</label>
                <input type="text" name="Ciudad" value="{{ $alumno->Ciudad }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                @error('Ciudad')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>