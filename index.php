<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web IADecorate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-200 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm relative">
        <div class="flex items-center justify-between px-4 py-3">
            <div class="flex items-center gap-4">
                <button onclick="toggleMenu()" class="p-2 hover:bg-gray-100 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                
                <div class="flex-1 max-w-2xl">
                    <input type="text" placeholder="Busque aquí" 
                        class="w-full px-4 py-2 bg-yellow-200 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>

            <div class="flex items-center gap-4">
                <button class="p-2 hover:bg-gray-100 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
                
                <div class="relative">
                    <button onclick="toggleProfile()" class="p-2 hover:bg-gray-100 rounded">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div id="profileMenu" class="hidden absolute top-full right-0 mt-2 bg-gray-300 rounded shadow-lg p-4 w-48 z-10">
                        <button class="block w-full text-left text-sm font-medium mb-2 py-2 px-2 hover:bg-gray-400 rounded">
                            Editar Perfil
                        </button>
                        <button class="block w-full text-left text-sm font-medium py-2 px-2 hover:bg-gray-400 rounded">
                            Ver mis Pedidos
                        </button>
                    </div>
                </div>
                
                <button class="p-2 hover:bg-gray-100 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-28 bg-gray-300 min-h-screen p-4">
            <nav class="flex flex-col gap-4">
                <button class="py-3 px-2 text-sm font-medium hover:bg-gray-400 rounded">
                    3D
                </button>
                <button class="py-3 px-2 text-sm font-medium hover:bg-gray-400 rounded">
                    Mensajería
                </button>
                <button class="py-3 px-2 text-sm font-medium hover:bg-gray-400 rounded">
                    INFO
                </button>
                <button class="py-3 px-2 text-sm font-medium hover:bg-gray-400 rounded">
                    Incidencias
                </button>
                <button class="py-3 px-2 text-sm font-medium hover:bg-gray-400 rounded">
                    Catálogo
                </button>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="text-center mb-8">
                <p class="text-sm text-gray-600">Página Principal(PC)</p>
            </div>

            <div class="grid grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Left Image Box -->
                <div class="bg-gray-400 h-64 flex items-center justify-center rounded shadow-lg">
                    <div class="text-center">
                        <p class="text-sm font-medium">Aquí iría</p>
                        <p class="text-sm font-medium">La imagen del sitio</p>
                        <p class="text-sm font-medium">interactivo</p>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="flex items-center">
                    <div class="text-sm leading-relaxed">
                        <p class="mb-4">
                            Lorem Ipsum is a type of placeholder text commonly used in design, publishing, and web development. 
                            Its origins can be traced back to a scrambled section of "De Finibus Bonorum et Malorum," a work 
                            by Cicero written in 45 BC. It allows designers to present visual elements without the need for 
                            meaningful content.
                        </p>
                        <p>
                            Additionally, various online generators can create "Lorem Ipsum" text for use in projects. 
                            Lorem Ipsum is a type of placeholder text commonly used in design, publishing, and web development. 
                            Its origins can be traced back to a scrambled section of "De Finibus Bonorum et Malorum," a work 
                            by Cicero written in 45 BC. It allows designers to present visual elements without the need for 
                            meaningful content. Additionally, various online generators can create "Lorem Ipsum" text for use in projects.
                        </p>
                    </div>
                </div>

                <!-- Right Image Box -->
                <div class="col-start-2 bg-gray-400 h-64 flex items-center justify-center rounded shadow-lg">
                    <div class="text-center">
                        <p class="text-sm font-medium">Aquí iría</p>
                        <p class="text-sm font-medium">publicidad inmobiliaria</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-yellow-200 py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-center gap-8">
                <button class="text-sm font-bold hover:underline">
                    Contáctenos
                </button>
                <button class="text-sm font-bold hover:underline">
                    Términos y Condiciones
                </button>
                <button class="text-sm font-bold hover:underline">
                    Soporte
                </button>
                
                <div class="flex gap-4 ml-8">
                    <button class="p-2 hover:bg-yellow-300 rounded-full transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </button>
                    <button class="p-2 hover:bg-yellow-300 rounded-full transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </button>
                    <button class="p-2 hover:bg-yellow-300 rounded-full transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                        </svg>
                    </button>
                    <button class="p-2 hover:bg-yellow-300 rounded-full transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleProfile() {
            const menu = document.getElementById('profileMenu');
            menu.classList.toggle('hidden');
        }

        function toggleMenu() {
            // Aquí puedes agregar funcionalidad para el menú hamburguesa
            console.log('Menu clicked');
        }

        // Cerrar el menú de perfil al hacer clic fuera
        document.addEventListener('click', function(event) {
            const profileMenu = document.getElementById('profileMenu');
            const isClickInside = event.target.closest('.relative');
            
            if (!isClickInside && !profileMenu.classList.contains('hidden')) {
                profileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>