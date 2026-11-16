@extends('layouts.app')

@section('title', 'Recursos, Biblioteca y Videoteca | MA-HAI - UAM Lerma')

@section('content')
    @php
        // CATÁLOGO FÁCIL DE EDITAR:
        // En 'paginas' coloca las rutas de cada hoja .jpg en orden (de 3 a 5 páginas por infografía)
        $infografias = [
            [
                'titulo' => 'Guía de separación de residuos sólidos en el hogar',
                'categoria' => 'Educación Ambiental',
                'descripcion' => 'Aprende a clasificar correctamente residuos orgánicos, inorgánicos reciclables y de manejo especial.',
                'paginas' => [
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/guia-separacion-p1.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/guia-separacion-p2.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/guia-separacion-p3.jpg']
                ],
                'pdf' => '#', // [PENDIENTE: Ruta opcional al PDF completo, o dejar '#' si solo serán JPG]
            ],
            [
                'titulo' => 'Compostaje comunitario y aprovechamiento orgánico',
                'categoria' => 'Talleres MA-HAI',
                'descripcion' => 'Pasos prácticos para transformar residuos orgánicos en abono útil para huertos y áreas verdes de Lerma.',
                'paginas' => [
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/compostaje-p1.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/compostaje-p2.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/compostaje-p3.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/compostaje-p4.jpg']
                ],
                'pdf' => '#',
            ],
            [
                'titulo' => 'Diagnóstico territorial de las 8 regiones de Lerma',
                'categoria' => 'Investigación Aplicada',
                'descripcion' => 'Resumen visual de los puntos críticos y dinámicas socioambientales identificadas en campo.',
                'paginas' => [
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/diagnostico-p1.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/diagnostico-p2.jpg']
                    'images/MA-HAI.gif', // [PENDIENTE: Reemplazar por 'images/recursos/diagnostico-p3.jpg']
                ],
                'pdf' => '#',
            ],
        ];

        $videos = [
            [
                'titulo' => 'Presentación del Proyecto MA-HAI en UAM Unidad Lerma',
                'duracion' => '3:45',
                'youtube_id' => '', // [PENDIENTE: ID del video de YouTube, ej. 'dQw4w9WgXcQ']
                'descripcion' => 'Conoce los objetivos, el enfoque de triple hélice y el impacto esperado en el municipio de Lerma.',
            ],
            [
                'titulo' => 'Recorrido de campo y cartografía participativa',
                'duracion' => '5:12',
                'youtube_id' => '', // [PENDIENTE: ID del video de YouTube]
                'descripcion' => 'Testimonios de estudiantes, docentes y vecinos durante el levantamiento de datos territoriales.',
            ],
        ];
    @endphp

    <!-- ENCABEZADO DE SECCIÓN -->
    <section class="bg-[#1f3622] text-white py-14 md:py-20 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <span class="inline-block bg-[#eab308] text-gray-900 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">
                Acceso Abierto · Transparencia
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-bold leading-tight mb-4">
                Biblioteca y Videoteca
            </h1>
            <p class="text-sm sm:text-base text-gray-200 max-w-2xl leading-relaxed">
                Infografías ilustradas, guías de separación y cápsulas audiovisuales generadas por el equipo MA-HAI para las comunidades de Lerma.
            </p>
        </div>
    </section>

    <!-- SECCIÓN 1: BIBLIOTECA DE INFOGRAFÍAS (MULTIPÁGINA JPG) -->
    <section class="bg-[#f7f5eb] py-16 md:py-20 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <div class="mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37] block mb-1">Material Gráfico</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Infografías y Guías</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($infografias as $item)
                    @php
                        $urlsPaginas = array_map(fn($ruta) => asset($ruta), $item['paginas']);
                        $totalPaginas = count($urlsPaginas);
                    @endphp

                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm border border-black/5 flex flex-col justify-between">
                        <div>
                            <!-- Portada clicable que abre el visor multipágina -->
                            <button type="button"
                                    data-titulo="{{ $item['titulo'] }}"
                                    data-paginas='@json($urlsPaginas)'
                                    onclick="abrirVisorDesdeBoton(this)"
                                    class="relative w-full aspect-[4/5] bg-gray-200 overflow-hidden group block text-left cursor-pointer"
                                    aria-label="Abrir infografía {{ $item['titulo'] }} ({{ $totalPaginas }} páginas)">
                                <img src="{{ $urlsPaginas[0] }}"
                                     alt="Portada de {{ $item['titulo'] }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300">

                                <!-- Insignia con número de páginas -->
                                <span class="absolute top-3 left-3 bg-[#1f3622]/90 text-white text-[11px] font-bold px-2.5 py-1 rounded-full">
                                    {{ $totalPaginas }} páginas
                                </span>

                                <span class="absolute bottom-3 right-3 bg-black/75 text-white text-xs font-semibold px-3 py-1.5 rounded-full backdrop-blur-sm">
                                    Leer infografía 🔍
                                </span>
                            </button>

                            <div class="p-6">
                                <span class="text-[11px] font-bold uppercase tracking-wider text-[#1f3622] bg-[#1f3622]/10 px-2.5 py-1 rounded-full">
                                    {{ $item['categoria'] }}
                                </span>
                                <h3 class="text-lg font-bold text-gray-900 mt-3 mb-2 leading-snug">
                                    {{ $item['titulo'] }}
                                </h3>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    {{ $item['descripcion'] }}
                                </p>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-2 flex flex-col gap-2">
                            <button type="button"
                                    data-titulo="{{ $item['titulo'] }}"
                                    data-paginas='@json($urlsPaginas)'
                                    onclick="abrirVisorDesdeBoton(this)"
                                    class="inline-flex items-center justify-center w-full gap-2 bg-[#1f3622] text-white text-xs font-bold uppercase tracking-wider py-3 px-4 rounded-xl hover:bg-[#2a452e] transition cursor-pointer">
                                Ver las {{ $totalPaginas }} páginas
                            </button>

                            @if($item['pdf'] !== '#')
                                <a href="{{ asset($item['pdf']) }}"
                                   download
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center w-full gap-2 bg-gray-100 text-gray-800 text-xs font-bold uppercase tracking-wider py-2.5 px-4 rounded-xl hover:bg-gray-200 transition">
                                    Descargar PDF ↓
                                </a>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: VIDEOTECA CON CARGA DIFERIDA -->
    <section class="bg-white py-16 md:py-20 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <div class="mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-[#1f3622] block mb-1">Cápsulas Audiovisuales</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Videoteca Comunitaria</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($videos as $video)
                    <article class="bg-[#f7f5eb] rounded-2xl overflow-hidden border border-black/5 shadow-sm flex flex-col">
                        <div class="relative w-full aspect-video bg-gray-900">
                            @if (!empty($video['youtube_id']))
                                <button type="button"
                                        onclick="cargarVideo(this, '{{ $video['youtube_id'] }}', '{{ addslashes($video['titulo']) }}')"
                                        class="w-full h-full relative group flex items-center justify-center cursor-pointer"
                                        aria-label="Reproducir video: {{ $video['titulo'] }}">
                                    <img src="https://i.ytimg.com/vi/{{ $video['youtube_id'] }}/hqdefault.jpg"
                                         alt="Portada de {{ $video['titulo'] }}"
                                         loading="lazy"
                                         class="w-full h-full object-cover opacity-85 group-hover:opacity-100 transition">
                                    <span class="absolute w-14 h-14 rounded-full bg-[#eab308] text-gray-900 flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                        <svg aria-hidden="true" class="w-6 h-6 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </span>
                                </button>
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center text-white bg-[#2a452e]">
                                    <div class="w-12 h-12 rounded-full bg-white/15 flex items-center justify-center mb-3">
                                        <svg aria-hidden="true" class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                    <span class="text-xs font-bold uppercase tracking-wider text-[#eab308]">[PENDIENTE: ID de YouTube]</span>
                                    <span class="text-xs text-gray-300 mt-1">Duración estimada: {{ $video['duracion'] }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $video['titulo'] }}</h3>
                                <p class="text-sm text-gray-600 leading-relaxed">{{ $video['descripcion'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- MODAL MULTIPÁGINA PARA HOJEAR INFOGRAFÍAS -->
    <div id="visor-modal"
         class="fixed inset-0 z-50 hidden bg-black/85 backdrop-blur-sm p-3 sm:p-6 flex items-center justify-center"
         role="dialog"
         aria-modal="true"
         aria-labelledby="visor-titulo"
         onclick="cerrarVisor()">
        <div class="relative max-w-3xl w-full bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col max-h-[92vh]"
             onclick="event.stopPropagation()">
            <!-- Barra superior del modal -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 bg-[#1f3622] text-white">
                <div class="pr-4 truncate">
                    <h3 id="visor-titulo" class="text-sm sm:text-base font-bold truncate">Infografía</h3>
                    <p id="visor-contador" class="text-xs text-[#eab308] font-semibold">Página 1 de 1</p>
                </div>
                <button id="visor-cerrar-btn"
                        type="button"
                        onclick="cerrarVisor()"
                        class="text-xs font-bold uppercase tracking-wider bg-white/15 hover:bg-white/25 px-3 py-1.5 rounded-lg cursor-pointer shrink-0">
                    Cerrar ✕
                </button>
            </div>

            <!-- Área de imagen con scroll vertical si la infografía es alta -->
            <div class="flex-1 overflow-auto bg-gray-100 flex items-start justify-center p-2 sm:p-4">
                <img id="visor-imagen" src="" alt="" class="max-w-full h-auto rounded-lg shadow-sm">
            </div>

            <!-- Controles de navegación entre páginas -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3 bg-white border-t border-gray-200">
                <button id="btn-anterior"
                        type="button"
                        onclick="cambiarPagina(-1)"
                        class="px-4 py-2 rounded-xl text-xs font-bold uppercase tracking-wider bg-gray-100 text-gray-800 hover:bg-gray-200 disabled:opacity-40 disabled:pointer-events-none cursor-pointer transition">
                    ← Anterior
                </button>

                <!-- Puntos indicadores de página -->
                <div id="visor-puntos" class="flex items-center gap-1.5" aria-hidden="true"></div>

                <button id="btn-siguiente"
                        type="button"
                        onclick="cambiarPagina(1)"
                        class="px-4 py-2 rounded-xl text-xs font-bold uppercase tracking-wider bg-[#1f3622] text-white hover:bg-[#2a452e] disabled:opacity-40 disabled:pointer-events-none cursor-pointer transition">
                    Siguiente →
                </button>
            </div>
        </div>
    </div>

    <script>
        let paginasActuales = [];
        let indiceActual = 0;
        let tituloActual = '';

        function abrirVisorDesdeBoton(boton) {
            tituloActual = boton.dataset.titulo || 'Infografía';
            paginasActuales = JSON.parse(boton.dataset.paginas || '[]');
            indiceActual = 0;

            if (paginasActuales.length === 0) return;

            actualizarVistaModal();
            const modal = document.getElementById('visor-modal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            document.getElementById('visor-cerrar-btn').focus();
        }

        function cambiarPagina(direccion) {
            const nuevoIndice = indiceActual + direccion;
            if (nuevoIndice >= 0 && nuevoIndice < paginasActuales.length) {
                indiceActual = nuevoIndice;
                actualizarVistaModal();
            }
        }

        function actualizarVistaModal() {
            const img = document.getElementById('visor-imagen');
            const titleEl = document.getElementById('visor-titulo');
            const contadorEl = document.getElementById('visor-contador');
            const btnAnt = document.getElementById('btn-anterior');
            const btnSig = document.getElementById('btn-siguiente');
            const puntosEl = document.getElementById('visor-puntos');

            titleEl.textContent = tituloActual;
            contadorEl.textContent = `Página ${indiceActual + 1} de ${paginasActuales.length}`;
            img.src = paginasActuales[indiceActual];
            img.alt = `${tituloActual} - Página ${indiceActual + 1} de ${paginasActuales.length}`;

            btnAnt.disabled = indiceActual === 0;
            btnSig.disabled = indiceActual === paginasActuales.length - 1;

            puntosEl.replaceChildren();
            paginasActuales.forEach((_, idx) => {
                const punto = document.createElement('span');
                punto.className = idx === indiceActual
                    ? 'w-2.5 h-2.5 rounded-full bg-[#1f3622]'
                    : 'w-2 h-2 rounded-full bg-gray-300';
                puntosEl.appendChild(punto);
            });
        }

        function cerrarVisor() {
            const modal = document.getElementById('visor-modal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function (e) {
            const modal = document.getElementById('visor-modal');
            if (modal.classList.contains('hidden')) return;

            if (e.key === 'Escape') cerrarVisor();
            if (e.key === 'ArrowLeft') cambiarPagina(-1);
            if (e.key === 'ArrowRight') cambiarPagina(1);
        });

        function cargarVideo(boton, youtubeId, titulo) {
            const iframe = document.createElement('iframe');
            iframe.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(youtubeId) + '?autoplay=1&rel=0';
            iframe.title = titulo;
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
            iframe.allowFullscreen = true;
            iframe.className = 'w-full h-full border-0';
            boton.replaceWith(iframe);
        }
    </script>
@endsection