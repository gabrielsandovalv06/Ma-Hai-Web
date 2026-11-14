@extends('layouts.app')

@section('contenido')


<section id="inicio" class="relative w-full min-h-[70vh] flex items-end pb-12 px-8 sm:px-16 bg-cover bg-center" style="background-image: url('{{ asset('images/MA-HAI.gif') }}');">

    <div class="max-w-6xl relative z-10">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-sans font-bold text-white uppercase leading-[1.1] tracking-tight text-shadow-sm">
            MA - HAI: TRANSFORMANDO COMUNIDADES Y GESTIONANDO RESIDUOS EN LERMA
        </h1>
    </div>

</section>
    <section id="nosotros" class="bg-[#f7f5eb] py-24 px-8 sm:px-16 relative">

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-12">
            <article class="md:w-3/5">
                <h2 class="text-3xl md:text-5xl font-serif font-bold mb-8 text-gray-900 leading-tight">Los residuos no se gestionan donde no se ven.</h2>
                <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                    En Lerma, el crecimiento del corredor industrial del Valle de Toluca convive
                    con zonas marginadas, humedales y comunidades rurales donde la
                    recolección de residuos sólidos es irregular o inexistente. El resultado:
                    tiraderos a cielo abierto, contaminación de cuerpos de agua y puntos críticos
                    que nadie ha mapeado.
                </p>
                <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                    <strong class="text-gray-900">MA-HAI parte de una idea simple:</strong> no se puede gestionar lo que no se ha
                    cartografiado. Por eso unimos estudiantes, vecinos y tecnología geoespacial para
                    producir el primer modelo territorial de residuos del municipio — uno construido
                    desde el campo, no desde un escritorio.
                </p>
            </article>

            <aside class="md:w-2/5 flex flex-col gap-6">
                <div class="bg-[#1f3622] p-8 text-white rounded-sm shadow-md min-h-[180px]">
                    <h4 class="font-bold text-sm text-[#eab308] mb-2">El problema en cifras</h4>
                </div>
                <div class="bg-[#eab308] p-8 text-black rounded-sm shadow-md min-h-[140px]">
                    <h4 class="font-bold text-sm mb-2 text-white">¿Qué construimos?</h4>
                    <p class="text-sm font-medium text-gray-900">Un Modelo Integral de Gestión de Residuos Sólidos para el Municipio de Lerma.</p>
                </div>
            </aside>
        </div>
    </section>

    <section id="fases" class="bg-[#1f3622] text-white py-24 px-8 sm:px-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-4">Tres fases, dieciséis meses.</h2>
            <p class="mb-16 text-gray-300 text-base md:text-lg max-w-3xl">Del diagnóstico territorial a la implementación de un sistema de monitoreo ciudadano. Noviembre 2025 – Marzo 2027.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <article class="bg-[#2a452e] p-8 rounded-sm shadow-lg">
                    <h3 class="text-2xl font-serif font-bold mb-1 text-gray-100 uppercase">Fase 1</h3>
                    <p class="text-xs text-[#eab308] font-bold mb-1">Nov 2025 - Mar 2026</p>
                    <p class="text-sm font-semibold mb-6">Diagnóstico participativo</p>

                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li> Encuestas del sistema de recolección</li>
                        <li> Cartografía colaborativa</li>
                        <li> Entrevistas comunitarias</li>
                    </ul>
                </article>

                <article class="bg-[#2a452e] p-8 rounded-sm shadow-lg">
                    <h3 class="text-2xl font-serif font-bold mb-1 text-gray-100 uppercase">Fase 2</h3>
                    <p class="text-xs text-[#eab308] font-bold mb-1">Abr 2026 - Nov 2026</p>
                    <p class="text-sm font-semibold mb-6">Diseño del Modelo Integral</p>

                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li>Modelo de rutas y separación</li>
                        <li>App de monitoreo ciudadano</li>
                        <li>Campañas de educación ambiental</li>
                    </ul>
                </article>

                <article class="bg-[#2a452e] p-8 rounded-sm shadow-lg">
                    <h3 class="text-2xl font-serif font-bold mb-1 text-gray-100 uppercase">Fase 3</h3>
                    <p class="text-xs text-[#eab308] font-bold mb-1">Dic 2026 - Mar 2027</p>
                    <p class="text-sm font-semibold mb-6">Piloto en campo</p>

                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li>Implementación piloto de recolección</li>
                        <li>Evaluación de impacto</li>
                        <li>Entrega al municipio</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="comunidades" class="bg-[#f7f5eb] py-24 px-8 sm:px-16 text-gray-900 relative">

        <div class="max-w-7xl mx-auto mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-12 mb-16 ">
                 <div class="md:w-1/2">
                     <h2 class="text-3xl md:text-5xl font-serif font-bold leading-tight">Ocho regiones, un solo territorio en disputa.</h2>
                 </div>
                 <div class="md:w-1/2 text-sm text-gray-600 border-l-2 border-gray-300 pl-6">
                     El municipio de Lerma se trabaja por regiones, cada una con su propia lógistica de residuos. Cabecera, libera lacustre, corredor industrial y zona de bosque.
                 </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                @php
                    $regiones = [
                        'Región I: Huitzizilapan',
                        'Región II: Tlalmimilolpan',
                        'Región III: Atarasquillo',
                        'Región IV: Ameyalco',
                        'Región V: Lerma',
                        'Región VI: Tultepec',
                        'Región VII: Peralta - Xochicuautla-Analco',
                        'Región VIII: Partidas - Parque Industrial'
                    ];
                @endphp

                @foreach($regiones as $region)
                    <div class="bg-[#e2e4e9] py-12 px-4 text-center rounded-sm font-semibold text-gray-700 hover:bg-gray-300 transition cursor-pointer text-xs shadow-sm flex items-center justify-center">
                        {{ $region }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="cursos" class="bg-[#eab308] py-24 px-8 sm:px-16 text-black">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-serif font-bold">Cursos / Talleres</h2>
        </div>
    </section>

    <section id="participa" class="bg-white py-24 px-8 sm:px-16 text-gray-900">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-2 uppercase tracking-widest">Tú también puedes ser parte</h2>
            <p class="mb-16 mt-5 text-sm font-medium text-gray-500 uppercase tracking-wider">El proyecto MA-HAI necesita manos, conocimiento y compromiso.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <article class="bg-[#d1e2d6] p-10 md:p-14 rounded-2rem shadow-sm relative">
                    <div class="w-10 h-10 bg-[#749b83] rounded-md mb-6 flex items-center justify-center text-white font-bold">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2L1 12h3v9h6v-6h4v6h6v-9h3L12 2z"/></svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold mb-4 text-gray-900">¿Estudias en la UAM Lerma?</h3>
                    <p class="mb-2 text-gray-800 text-xs font-semibold leading-relaxed">
                        Realiza tu servicio social construyendo el diagnóstico territorial, cartografía, educación ambiental y desarrollo tecnológico.
                    </p>
                    <p class="mb-8 text-gray-800 text-xs font-bold leading-relaxed">
                        480 horas, 6 meses, modalidad mixta.
                    </p>
                    <ul class="space-y-4 mb-12 font-semibold text-gray-800 text-xs">
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#1f3622] rounded-full flex-shrink-0"></span>
                            Ing. en Sistemas de Tecnología de la Información
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#1f3622] rounded-full flex-shrink-0"></span>
                            Biología Ambiental
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#1f3622] rounded-full flex-shrink-0"></span>
                            Arte y Comunicación Digitales
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#1f3622] rounded-full flex-shrink-0"></span>
                            Políticas Públicas
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#749b83] text-white px-8 py-3 rounded-md font-bold text-sm hover:bg-[#5a7d68] transition shadow-md w-max">
                        Regístrate al Servicio Social <span class="text-lg">→</span>
                    </a>
                </article>

                <article class="bg-[#f4d3c4] p-10 md:p-14 rounded-2rem shadow-sm relative">
                    <div class="w-10 h-10 bg-[#b55d37] rounded-md mb-6 flex items-center justify-center text-white font-bold">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold mb-4 text-gray-900">¿No eres estudiante UAM?</h3>
                    <p class="mb-8 text-gray-800 text-xs font-semibold leading-relaxed">
                        Puedes sumarte como voluntario. Buscamos personas con ganas de colaborar desde el trabajo de campo, la difusión comunitaria o en talleres ambientales.
                    </p>
                    <ul class="space-y-4 mb-12 font-semibold text-gray-800 text-xs">
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#b55d37] rounded-full flex-shrink-0"></span>
                            Trabajo de campo en regiones
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#b55d37] rounded-full flex-shrink-0"></span>
                            Difusión y comunicación
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-8px h-8px bg-transparent border-2 border-[#b55d37] rounded-full flex-shrink-0"></span>
                            Talleres en escuelas y colonias
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#b55d37] text-white px-8 py-3 rounded-md font-bold text-sm hover:bg-[#9a4b2a] transition shadow-md w-max mt-auto">
                        Quiero ser voluntario <span class="text-lg">→</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection
