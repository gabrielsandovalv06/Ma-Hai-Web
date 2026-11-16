@extends('layouts.app')

@section('title', 'Participa | Servicio Social y Voluntariado MA-HAI')

@section('content')
    <section class="bg-[#f7f5eb] py-5 md:py-10 px-6 sm:px-8 md:px-16 text-gray-900">
        <div class="max-w-7xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37] block mb-2">Convocatoria Abierta</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-bold mb-3">Tú también puedes ser parte</h1>
            <p class="mb-12 text-sm sm:text-base font-medium text-gray-600 max-w-2xl">
                El proyecto MA-HAI necesita manos, conocimiento y compromiso. Súmate desde tu licenciatura en la UAM Unidad Lerma o como voluntario comunitario.
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Tarjeta Verde: Servicio Social UAM Lerma -->
                <article class="bg-[#d1e2d6] p-8 sm:p-12 rounded-3xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-[#1f3622] rounded-xl mb-6 flex items-center justify-center text-white font-bold">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2L1 12h3v9h6v-6h4v6h6v-9h3L12 2z"/></svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold mb-4 text-gray-900">¿Estudias en la UAM Lerma?</h2>
                        <p class="mb-2 text-gray-800 text-sm leading-relaxed">
                            Realiza tu servicio social construyendo el diagnóstico territorial, cartografía, educación ambiental y desarrollo tecnológico.
                        </p>
                        <p class="mb-6 text-[#1f3622] text-xs font-bold uppercase tracking-wider">
                            480 horas · 6 meses · Modalidad mixta
                        </p>
                        <ul class="space-y-3 mb-10 font-semibold text-gray-800 text-sm">
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#1f3622] rounded-full flex-shrink-0"></span> 
                                Ing. en Sistemas y Tecnologías de la Información
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#1f3622] rounded-full flex-shrink-0"></span> 
                                Biología Ambiental
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#1f3622] rounded-full flex-shrink-0"></span> 
                                Arte y Comunicación Digitales
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#1f3622] rounded-full flex-shrink-0"></span> 
                                Políticas Públicas
                            </li>
                        </ul>
                    </div>
                    <!-- [PENDIENTE: Enlace a formulario de registro de Servicio Social] -->
                    <a href="#PENDIENTE-FORMULARIO-SERVICIO-SOCIAL" class="inline-flex items-center justify-center gap-2 bg-[#1f3622] text-white px-6 py-3.5 rounded-full font-bold text-sm hover:bg-[#2a452e] transition shadow-md w-full sm:w-max">
                        Regístrate al Servicio Social <span aria-hidden="true">→</span>
                    </a>
                </article>

                <!-- Tarjeta Naranja: Voluntariado -->
                <article class="bg-[#f4d3c4] p-8 sm:p-12 rounded-3xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-[#b55d37] rounded-xl mb-6 flex items-center justify-center text-white font-bold">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold mb-4 text-gray-900">¿No eres estudiante UAM?</h2>
                        <p class="mb-8 text-gray-800 text-sm leading-relaxed">
                            Puedes sumarte como voluntario. Buscamos personas con ganas de colaborar desde el trabajo de campo, la difusión comunitaria o en talleres ambientales.
                        </p>
                        <ul class="space-y-3 mb-10 font-semibold text-gray-800 text-sm">
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#b55d37] rounded-full flex-shrink-0"></span> 
                                Trabajo de campo en regiones
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#b55d37] rounded-full flex-shrink-0"></span> 
                                Difusión y comunicación
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-[#b55d37] rounded-full flex-shrink-0"></span> 
                                Apoyo en encuestas y talleres
                            </li>
                        </ul>
                    </div>
                    <!-- [PENDIENTE: Enlace a formulario de registro de Voluntariado] -->
                    <a href="#PENDIENTE-FORMULARIO-VOLUNTARIADO" class="inline-flex items-center justify-center gap-2 bg-[#b55d37] text-white px-6 py-3.5 rounded-full font-bold text-sm hover:bg-[#9a4b2a] transition shadow-md w-full sm:w-max">
                        Quiero ser voluntario <span aria-hidden="true">→</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection