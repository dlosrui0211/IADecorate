<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mi Web' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-200 font-sans flex flex-col">

    <header class="bg-white shadow-sm relative z-20">
        <div class="flex items-center justify-between px-4 py-3">
            <div class="font-bold text-xl">Mi Logo</div>
            <button class="bg-yellow-200 px-4 py-1 rounded">Perfil</button>
        </div>
    </header>

    <div class="flex flex-1">
        <aside class="w-28 bg-gray-300 min-h-screen p-4">
            <nav class="flex flex-col gap-4 text-center">
                <a href="#" class="hover:bg-gray-400 p-2 rounded">Inicio</a>
                <a href="#" class="hover:bg-gray-400 p-2 rounded">Mensajes</a>
                <a href="#" class="hover:bg-gray-400 p-2 rounded">Catálogo</a>
            </nav>
        </aside>

        <div class="flex-1 w-full">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
