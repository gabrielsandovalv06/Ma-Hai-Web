@extends('layouts.app')

@section('title', 'Comunidades y Recorrido Territorial | MA-HAI')

@section('content')
    <!-- BANNER SUPERIOR DE TERRITORIO -->
    <section class="w-full h-48 sm:h-64 md:h-80 bg-cover bg-center bg-gray-800 relative"
             style="background-image: url('{{ asset('images/MA-HAI.gif') }}');"
             aria-label="Vista panorámica del municipio de Lerma">
        <!-- [PENDIENTE: Colocar fotografía panorámica de Lerma en public/images/panoramica-lerma.webp] -->
        <div class=" inset-0 bg-black/20"></div>
    </section>

    <!-- SECCIÓN: NUESTRO RECORRIDO TERRITORIAL -->
    <section class="bg-[#f7f5eb] py-12 sm:py-16 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-2xl sm:text-4xl font-bold text-gray-900 mb-8">Nuestro recorrido territorial</h1>

            <!-- Contenedor del Mapa Territorial -->
            <div class="bg-[#ede9d5] p-4 sm:p-8 rounded-3xl shadow-sm border border-black/5">
                <!-- Leyenda de estados (Pills) -->
                <div class="flex flex-wrap items-center gap-4 sm:gap-6 mb-6 text-xs sm:text-sm font-semibold text-gray-700">
                    <span class="inline-flex items-center gap-2">
                        <span class="w-3.5 h-3.5 rounded-sm bg-[#c46835] inline-block"></span> Documentada
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-3.5 h-3.5 rounded-sm bg-[#7d9c75] inline-block"></span> En proceso
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="w-3.5 h-3.5 rounded-sm bg-[#c9c4b1] inline-block"></span> Próximamente
                    </span>
                </div>

                <!-- Lienzo del Mapa Conceptual de las 8 Regiones -->
                <div class="bg-[#faf8f2] rounded-2xl p-6 sm:p-10 border border-black/5 relative overflow-hidden">
                    <p class="text-[11px] sm:text-xs font-mono uppercase tracking-widest text-gray-400 mb-8">
                        MUNICIPIO DE LERMA · 19.28°N 99.51°W
                    </p>

                    <!-- Representación interactiva y responsiva de las 8 regiones -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 items-center justify-items-center py-4">
                        <a href="#ficha-region" class="w-28 h-28 sm:w-32 sm:h-32 rounded-[42%_58%_60%_40%/45%_45%_55%_55%] bg-[#c46835] text-white ring-2 ring-gray-900 shadow-md flex flex-col items-center justify-center p-3 text-center transition hover:scale-105">
                            <span class="text-[10px] font-bold uppercase opacity-80">R1</span>
                            <span class="text-xs font-bold leading-tight">Cabecera Lerma</span>
                        </a>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[55%_45%_40%_60%/50%_60%_40%_50%] bg-[#e09f7d] text-gray-900 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R2</span>
                            <span class="text-xs font-semibold leading-tight">Tultepec</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[48%_52%_55%_45%/60%_40%_60%_40%] bg-[#b8c9a9] text-gray-900 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R3</span>
                            <span class="text-xs font-semibold leading-tight">Xochicuautla</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[60%_40%_50%_50%/40%_55%_45%_60%] bg-[#b8c9a9] text-gray-900 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R4</span>
                            <span class="text-xs font-semibold leading-tight">Huitzizilapan</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[45%_55%_60%_40%/55%_45%_50%_50%] bg-[#b8c9a9] text-gray-900 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R5</span>
                            <span class="text-xs font-semibold leading-tight">Atarasquillo</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[50%_50%_45%_55%/45%_55%_45%_55%] bg-[#dbd6c6] text-gray-700 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R6</span>
                            <span class="text-xs font-semibold leading-tight">Ameyalco</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[55%_45%_55%_45%/50%_50%_50%_50%] bg-[#dbd6c6] text-gray-700 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R7</span>
                            <span class="text-xs font-semibold leading-tight">Peralta</span>
                        </div>

                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-[40%_60%_50%_50%/55%_45%_55%_45%] bg-[#dbd6c6] text-gray-700 flex flex-col items-center justify-center p-3 text-center">
                            <span class="text-[10px] font-bold uppercase opacity-75">R8</span>
                            <span class="text-xs font-semibold leading-tight">Partidas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: FICHA DE REGIÓN DOCUMENTADA (Cabecera Lerma) -->
    <section id="ficha-region" class="bg-white py-12 sm:py-16 px-4 sm:px-8 md:px-16 rounded-t-3xl shadow-inner">
        <div class="max-w-5xl mx-auto">
            <!-- Encabezado de la ficha -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-4">
                <div class="flex items-center gap-3">
                    <span class="bg-[#1f3622] text-white text-xs font-bold px-3 py-1 rounded-md">R1</span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#c46835]">Documentada</span>
                </div>
                <div class="text-left sm:text-right">
                    <span class="block text-[10px] font-bold uppercase tracking-widest text-gray-400">Última actualización</span>
                    <time datetime="2026-06-12" class="text-xs sm:text-sm font-mono font-semibold text-gray-700">12 jun 2026</time>
                </div>
            </div>

            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mb-4">Cabecera Lerma</h2>

            <!-- Etiquetas de zonas (Estilo Veggy) -->
            <div class="flex flex-wrap gap-2 mb-6">
                <span class="bg-[#e9ece6] text-[#1f3622] text-xs font-semibold px-3.5 py-1.5 rounded-full">
                    Lerma de Villada
                </span>
                <span class="bg-[#e9ece6] text-[#1f3622] text-xs font-semibold px-3.5 py-1.5 rounded-full">
                    Parque Industrial Lerma
                </span>
            </div>

            <!-- Contadores de recursos -->
            <p class="text-xs text-gray-500 font-medium mb-6">
                8 fotos &nbsp;·&nbsp; 3 videos &nbsp;·&nbsp; 2 mapas
            </p>

            <!-- Cuadrícula Multimedia 3x2 (Responsiva: 1 col en móvil pequeño, 2 en tablet, 3 en escritorio) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 mb-8">
                <!-- Tarjeta 1: Foto -->
                <div class="aspect-square rounded-2xl bg-[#456343] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Imagen de diagnóstico 1 en Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center">
                        <svg aria-hidden="true" class="w-8 h-8 opacity-90 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Foto</span>
                </div>

                <!-- Tarjeta 2: Foto -->
                <div class="aspect-square rounded-2xl bg-[#c46835] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Imagen de diagnóstico 2 en Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center">
                        <svg aria-hidden="true" class="w-8 h-8 opacity-90 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Foto</span>
                </div>

                <!-- Tarjeta 3: Foto -->
                <div class="aspect-square rounded-2xl bg-[#688656] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Imagen de diagnóstico 3 en Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center">
                        <svg aria-hidden="true" class="w-8 h-8 opacity-90 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Foto</span>
                </div>

                <!-- Tarjeta 4: Foto -->
                <div class="aspect-square rounded-2xl bg-[#385437] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Imagen de diagnóstico 4 en Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center">
                        <svg aria-hidden="true" class="w-8 h-8 opacity-90 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.5"/><path d="M21 15l-5-5L5 19"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Foto</span>
                </div>

                <!-- Tarjeta 5: Video (Con botón circular inspirado en Referencia 2) -->
                <div class="aspect-square rounded-2xl bg-[#c46835] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Enlace a video de Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center w-12 h-12 rounded-full bg-white/25 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition">
                        <svg aria-hidden="true" class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Video</span>
                </div>

                <!-- Tarjeta 6: Mapa -->
                <div class="aspect-square rounded-2xl bg-[#5a784d] text-white p-5 flex flex-col justify-between relative group cursor-pointer overflow-hidden shadow-sm">
                    <!-- [PENDIENTE: Imagen de cartografía de Cabecera Lerma] -->
                    <div></div>
                    <div class="self-center">
                        <svg aria-hidden="true" class="w-8 h-8 opacity-90 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-wider opacity-90">Mapa</span>
                </div>
            </div>

            <p class="text-sm sm:text-base text-gray-600 leading-relaxed max-w-3xl">
                Diagnóstico completo del primer cuadro y el corredor industrial: rutas actuales de recolección, puntos de acumulación y entrevistas con comercios.
            </p>
        </div>
    </section>

    <!-- SECCIÓN: PRÓXIMOS DESTINOS -->
    <section class="bg-[#eab308] py-16 px-4 sm:px-8 md:px-16 text-gray-900">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold mb-6">Próximos destinos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl">
                    <span class="text-xs font-bold uppercase text-[#1f3622]">En proceso</span>
                    <h3 class="font-bold text-lg mt-1">Xochicuautla y Huitzizilapan</h3>
                    <p class="text-xs text-gray-700 mt-2">[PENDIENTE: Fechas de próximos recorridos de campo en zonas altas].</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl">
                    <span class="text-xs font-bold uppercase text-[#1f3622]">En proceso</span>
                    <h3 class="font-bold text-lg mt-1">Atarasquillo y Tultepec</h3>
                    <p class="text-xs text-gray-700 mt-2">[PENDIENTE: Fechas de mapeo participativo y talleres vecinales].</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl">
                    <span class="text-xs font-bold uppercase text-gray-600">Próximamente</span>
                    <h3 class="font-bold text-lg mt-1">Ameyalco, Peralta y Partidas</h3>
                    <p class="text-xs text-gray-700 mt-2">[PENDIENTE: Calendario de visitas y levantamiento de encuestas].</p>
                </div>
            </div>
        </div>
    </section>
@endsection