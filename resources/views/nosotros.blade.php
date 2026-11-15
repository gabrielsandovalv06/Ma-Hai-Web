@extends('layouts.app')

@section('title', 'Sobre Nosotros | MA-HAI - UAM Lerma')

@section('content')
    <section class="relative w-full min-h-[40vh] md:min-h-[50vh] flex items-end pb-12 sm=pb-14  justify-center px-4 sm:px-8 bg-cover bg-center bg-gray-900"
             style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('{{ asset('images/quienes_somos.png') }}');">
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-sans font-bold uppercase text-white tracking-wider text-center drop-shadow-md">
            ¿Quiénes somos?
        </h1>
    </section>

    <!-- SECCIÓN: NUESTRA HISTORIA (Línea del tiempo responsiva) -->
    <section class="bg-white py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-12">Nuestra Historia</h2>

            <div class="relative border-l-2 border-gray-300 ml-4 sm:ml-12 pl-8 sm:pl-12 space-y-12">
                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37]">Origen del proyecto</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Identificación de la problemática en Lerma</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        [PENDIENTE: Texto del primer hito de Nuestra Historia — cómo surgió la iniciativa en la UAM Unidad Lerma].
                    </p>
                </div>

                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#1f3622]">Articulación comunitaria</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Vinculación interdisciplinaria y recorridos de campo</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        [PENDIENTE: Texto del segundo hito de Nuestra Historia — integración de estudiantes, docentes y comunidades].
                    </p>
                </div>

                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#eab308]">Consolidación</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Construcción del Modelo Territorial MA-HAI</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        [PENDIENTE: Texto del tercer hito de Nuestra Historia — lanzamiento de la plataforma y mapeo de las 8 regiones].
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: MISIÓN Y VISIÓN -->
    <section class="bg-[#e5e7eb] py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-10">Misión y Visión</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Tarjeta Misión (Verde bosque) -->
                <article class="bg-[#1f3622] text-white p-8 sm:p-10 rounded-3xl shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-white/10 text-[#eab308] flex items-center justify-center mb-6">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold text-[#eab308] mb-3">Misión</h3>
                        <p class="text-sm sm:text-base text-gray-200 leading-relaxed">
                            Impulsar la gestión integral y sostenible de los residuos en el municipio de Lerma a través de la participación comunitaria, la investigación aplicada y el monitoreo ciudadano, transformando la relación de las personas con su entorno para construir un territorio más limpio y sustentable.
                        </p>
                    </div>
                </article>

                <!-- Tarjeta Visión (Amarillo mostaza) -->
                <article class="bg-[#eab308] text-gray-900 p-8 sm:p-10 rounded-3xl shadow-lg flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#1f3622]/10 text-[#1f3622] flex items-center justify-center mb-6">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif font-bold text-[#1f3622] mb-3">Visión</h3>
                        <p class="text-sm sm:text-base text-gray-900 font-medium leading-relaxed">
                            Consolidarnos como un modelo comunitario y universitario referente en el Estado de México, reconocido por articular a la academia, a las autoridades y a la ciudadanía en la cocreación de soluciones socioambientales y la gestión del territorio local.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: VALORES -->
    <section class="bg-white py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-12">Valores</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Corresponsabilidad social</h3>
                </div>
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Participación comunitaria</h3>
                </div>
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Sustentabilidad y conciencia</h3>
                </div>
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Transparencia</h3>
                </div>
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Empatía</h3>
                </div>
                <div class="p-6 rounded-2xl bg-[#f7f5eb] border border-black/5 text-center flex flex-col items-center justify-center min-h-[130px]">
                    <h3 class="font-bold text-gray-900 text-base">Co-creación</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CONOCE AL EQUIPO MA-HAI (Bento Grid asimétrico) -->
    <section class="bg-[#e5e7eb] py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#1f3622] mb-10">Conoce al equipo MA-HAI</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Tarjeta Grande Izquierda (Ocupa 2 filas en escritorio) -->
                <article class="bg-white rounded-3xl p-8 shadow-sm lg:row-span-2 flex flex-col justify-between min-h-[280px]">
                    <div>
                        <span class="inline-block bg-[#1f3622]/10 text-[#1f3622] text-xs font-bold uppercase px-3 py-1 rounded-full mb-4">
                            Coordinación General
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">[PENDIENTE: Nombre de Coordinador/a o Equipo Académico]</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            [PENDIENTE: Breve semblanza del equipo académico e investigadores de la UAM Unidad Lerma que dirigen MA-HAI].
                        </p>
                    </div>
                    <p class="text-xs font-semibold text-gray-400 mt-6 uppercase tracking-wider">UAM Unidad Lerma</p>
                </article>

                <!-- Tarjeta Derecha Superior -->
                <article class="bg-white rounded-3xl p-8 shadow-sm flex flex-col justify-between min-h-[160px]">
                    <div>
                        <span class="inline-block bg-[#eab308]/20 text-gray-900 text-xs font-bold uppercase px-3 py-1 rounded-full mb-3">
                            Servicio Social e Investigación
                        </span>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">[PENDIENTE: Equipo de Sistemas, Biología y Políticas Públicas]</h3>
                        <p class="text-sm text-gray-600">
                            [PENDIENTE: Descripción de los estudiantes encargados de cartografía y desarrollo web].
                        </p>
                    </div>
                </article>

                <!-- Tarjeta Derecha Inferior -->
                <article class="bg-white rounded-3xl p-8 shadow-sm flex flex-col justify-between min-h-[160px]">
                    <div>
                        <span class="inline-block bg-[#f4d3c4] text-[#b55d37] text-xs font-bold uppercase px-3 py-1 rounded-full mb-3">
                            Enlace Comunitario y Comunicación
                        </span>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">[PENDIENTE: Equipo de Arte Digital y Trabajo de Campo]</h3>
                        <p class="text-sm text-gray-600">
                            [PENDIENTE: Descripción del equipo de talleres comunitarios y difusión visual].
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: ALIANZAS -->
    <section class="bg-white py-16 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#1f3622] mb-10">Alianzas</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 max-w-2xl">
                <!-- Tarjeta Logo UAM Lerma -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex items-center justify-center h-32">
                    <img src="{{ asset('images/Logo-uam.png') }}"
                         alt="Logo de la Universidad Autónoma Metropolitana, Unidad Lerma"
                         loading="lazy"
                         width="240"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>

                <!-- Tarjeta Logo Ayuntamiento de Lerma -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex items-center justify-center h-32">
                    <img src="{{ asset('images/logo-lerma.png') }}"
                         alt="Logo del Ayuntamiento de Lerma, Somos Todos"
                         loading="lazy"
                         width="200"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>
            </div>
        </div>
    </section>
@endsection