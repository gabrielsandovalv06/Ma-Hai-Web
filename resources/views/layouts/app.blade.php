<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MA-HAI: Transformando Comunidades y Gestionando Residuos en Lerma')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 antialiased bg-[#f7f5eb] flex flex-col min-h-screen overflow-x-hidden">

    <header class="bg-[#f7f5eb]/95 backdrop-blur-sm py-4 px-4 sm:px-8 md:px-16 sticky top-0 z-50 border-b border-black/10">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo MA-HAI -->
            <a href="{{ route('inicio') }}" class="flex items-center gap-3 shrink-0" aria-label="Ir al inicio de MA-HAI">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de MA-HAI: Transformando comunidades y gestionando residuos en Lerma"
                    width = "160"
                    height = "56"
                    class = "h-12 sm:h-14 w-auto object-contain"
                >
            </a>

            <button id="menu-toggle"
                    type="button"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                    aria-label="Abrir menú de navegación"
                    class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-[#1f3622] hover:bg-[#1f3622] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#1f3622] transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <nav aria-label="Navegación principal" class="hidden md:block">
                <ul class="flex items-center gap-2 lg:gap-4 text-xs lg:text-sm font-semibold uppercase tracking-wider text-gray-700">
                    <li>
                        <a href="{{ route('inicio') }}"
                           @if(request()->routeIs('inicio')) aria-current="page" @endif
                           class="inline-block px-3 lg:px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs('inicio') ? 'bg-[#eab308] text-white' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }}"
                           @if(request()->routeIs('nosotros')) aria-current="page" @endif
                           class="inline-block px-3 lg:px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs('nosotros') ? 'bg-[#eab308] text-white' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            Sobre Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comunidades') }}"
                           @if(request()->routeIs('comunidades')) aria-current="page" @endif
                           class="inline-block px-3 lg:px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs('comunidades') ? 'bg-[#eab308] text-white' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            Comunidades
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('recursos') }}"
                           @if(request()->routeIs('recursos')) aria-current="page" @endif
                           class="inline-block px-3 lg:px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs('recursos') ? 'bg-[#eab308] text-white' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            Recursos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('participa') }}"
                           @if(request()->routeIs('participa')) aria-current="page" @endif
                           class="inline-block px-3 lg:px-4 py-2 rounded-md transition-all duration-300 {{ request()->routeIs('participa') ? 'bg-[#eab308] text-white' : 'hover:text-white hover:scale-105 hover:bg-[#1f3622]' }}">
                            Participa
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <nav id="mobile-menu" aria-label="Navegación móvil" class="hidden md:hidden mt-4 pt-4 border-t border-black/10">
            <ul class="flex flex-col gap-2 text-sm font-semibold uppercase tracking-wider text-gray-800">
                <li>
                    <a href="{{ route('inicio') }}"
                       class="block px-4 py-3 rounded-md {{ request()->routeIs('inicio') ? 'bg-[#1f3622] text-white' : 'hover:bg-[#1f3622]/10' }}">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('nosotros') }}"
                       class="block px-4 py-3 rounded-md {{ request()->routeIs('nosotros') ? 'bg-[#1f3622] text-white' : 'hover:bg-[#1f3622]/10' }}">
                        Sobre Nosotros
                    </a>
                </li>
                <li>
                    <a href="{{ route('comunidades') }}"
                       class="block px-4 py-3 rounded-md {{ request()->routeIs('comunidades') ? 'bg-[#1f3622] text-white' : 'hover:bg-[#1f3622]/10' }}">
                        Comunidades
                    </a>
                </li>
                <li>
                    <a href="{{ route('recursos') }}"
                       class="block px-4 py-3 rounded-md {{ request()->routeIs('recursos') ? 'bg-[#1f3622] text-white' : 'hover:bg-[#1f3622]/10' }}">
                        Recursos
                    </a>
                </li>
                <li>
                    <a href="{{ route('participa') }}"
                       class="block px-4 py-3 rounded-md {{ request()->routeIs('participa') ? 'bg-[#1f3622] text-white' : 'hover:bg-[#1f3622]/10' }}">
                        Participa
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-[#1f3622] text-white py-12 sm:py-16 px-4 sm:px-8 md:px-16 mt-auto">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-10 md:gap-12">
            <div class="md:w-1/3">
                <h3 class="text-2xl font-bold mb-4">MA-HAI</h3>
                <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                    Transformando comunidades y gestionando residuos en Lerma. Programa 
                    de servicio social de la UAM Unidad Lerma en colaboración con el 
                    Ayuntamiento de Lerma, Estado de México.
                </p>
                <div class="flex gap-4 text-gray-300 items-center">
                   
                <a href="https://www.instagram.com/mahai.lerma?mdxt=MXV3dmwzc2N0cHF2bw=="
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Instagram de MA-HAI (abre en una pestaña nueva)"
                       class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#1f3622] transition-all duration-300">
                        <svg aria-hidden="true" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>

                    <a href="https://youtube.com/@gestionderesiduossolidoslerma?si=lpPgj909H4pwbpXj"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Canal de YouTube de MA-HAI (abre en una pestaña nueva)"
                       class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#1f3622] transition-all duration-300">
                        <svg aria-hidden="true" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>

                    <a href="https://www.facebook.com/share/1FzA6NuTt9/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Página de Facebook de MA-HAI (abre en una pestaña nueva)"
                       class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#1f3622] transition-all duration-300">
                        <svg aria-hidden="true" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <nav aria-label="Enlaces del pie de página" class="md:w-2/3 grid grid-cols-2 sm:grid-cols-3 gap-8">
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Proyecto</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="{{ route('nosotros') }}" class="hover:text-white transition">Qué hacemos</a></li>
                        <li><a href="{{ route('comunidades') }}" class="hover:text-white transition">¿Por qué Lerma?</a></li>
                        <li><a href="{{ route('recursos') }}" class="hover:text-white transition">Recursos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Comunidad</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="{{ route('comunidades') }}" class="hover:text-white transition">Regiones</a></li>
                        <li><a href="{{ route('participa') }}" class="hover:text-white transition">Servicio Social UAM</a></li>
                        <li><a href="{{ route('participa') }}" class="hover:text-white transition">Voluntariado</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4 text-gray-100">Contacto</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="{{ route('participa') }}" class="hover:text-white transition">Participa</a></li>
                        <li><a href="#PENDIENTE-CORREO" class="hover:text-white transition">Correo</a></li>
                        <li><a href="#PENDIENTE-LEGAL" class="hover:text-white transition">Aviso de privacidad</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>

    <!-- Script ligero para abrir/cerrar el menú en celulares -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', () => {
                const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>