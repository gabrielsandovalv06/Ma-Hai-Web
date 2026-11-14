<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA-HAI: Transformando Comunidades y Gestionando Residuos en Lerma</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="font-sans text-gray-800 antialiased bg-[#f7f5eb]">

    <header class="bg-[#f7f5eb] py-4 px-8 flex justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <strong class="text-2xl font-bold text-gray-900">MA-HAI</strong>
        </div>

        <nav aria-label="Navegación principal" class="hidden md:block">
            <ul class="flex items-center gap-3 text-sm font-semibold uppercase tracking-wider text-gray-800">
                @php
                    $navItems = [
                        ['route' => 'inicio', 'label' => 'Inicio'],
                        ['route' => 'nosotros', 'label' => 'Sobre Nosotros'],
                        ['route' => 'comunidades', 'label' => 'Comunidades'],
                        ['route' => 'biblioteca', 'label' => 'Biblioteca'],
                        ['route' => 'videoteca', 'label' => 'Videoteca'],
                        ['route' => 'contacto', 'label' => 'Contacto'],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    @php $isActive = request()->routeIs($item['route']); @endphp
                    <li>
                        <a href="{{ route($item['route']) }}"
                        @if($isActive) aria-current="page" @endif
                        class="inline-block px-4 py-2 rounded-md transition-all duration-300 ease-in-out {{ $isActive ? 'bg-[#eab308] text-white font-bold shadow-sm' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="bg-[#1f3622] text-white py-16 px-8 sm:px-16 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">
            <div class="md:w-1/3">
                <h3 class="text-2xl font-bold mb-4">MA-HAI</h3>
                <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                    Transformando comunidades y gestionando residuos en Lerma. Programa
                    de servicio social de la UAM Unidad Lerma en colaboración con el
                    Ayuntamiento de Lerma, Estado de México.
                </p>
                <div class="flex gap-6 text-gray-400 items-center">
                    <!-- Logo de Instagram -->
                    <a href="https://www.instagram.com/mahai.lerma?mdxt=MXV3dmwzc2N0cHF2bw==" class="hover:text-white transition-colors duration-300 hover:scale-110" aria-label="Instagram de Ma-Hai" rel="noopener noreferrer" target="_blank">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>

                    <!-- Logo de YouTube -->
                    <a href="https://youtube.com/@gestionderesiduossolidoslerma?si=lpPgj909H4pwbpXj" class="hover:text-white transition-colors duration-300 hover:scale-110" aria-label="Canal de Youtube de Ma-Hai" rel="noopener noreferrer" target="_blank">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>

                    <!-- Logo de Facebook -->
                    <a href="https://www.facebook.com/share/1FzA6NuTt9/" class="hover:text-white transition-colors duration-300 hover:scale-110" aria-label="Facebook de Ma-Hai" rel="noopener noreferrer" target="_blank">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <nav class="md:w-2/3 grid grid-cols-2 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Proyecto</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Qué hacemos</a></li>
                        <li><a href="#" class="hover:text-white transition">¿Por qué Lerma?</a></li>
                        <li><a href="#" class="hover:text-white transition">Impacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Comunidad</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Comunidades</a></li>
                        <li><a href="#" class="hover:text-white transition">UAM Lerma</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Contacto</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Correo</a></li>
                        <li><a href="#" class="hover:text-white transition">Soporte</a></li>
                        <li><a href="#" class="hover:text-white transition">Legal</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>

</body>
</html>
