@extends('layouts.app')

@section('content')

    <section id="inicio"
             class="relative w-full min-h-[60vh] md:min-h-[75vh] flex items-end pb-10 sm:pb-16 px-4 sm:px-8 md:px-16 bg-cover bg-center bg-gray-900"
             style="background-image: url('{{ asset('images/MA-HAI.gif') }}');">
        <div class="max-w-7xl mx-auto w-full relative z-10">
            <span class="inline-block bg-[#eab308] text-gray-900 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">
                UAM Unidad Lerma · Territorio y Comunidad
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-sans font-bold text-white uppercase leading-[1.1] tracking-tight max-w-5xl">
                MA - HAI: TRANSFORMANDO COMUNIDADES Y GESTIONANDO RESIDUOS EN LERMA
            </h1>
        </div>
    </section>

    <!-- SECCIÓN: EL PROBLEMA (Con tarjetas Bento inspiradas en Lumóra) -->
    <section id="nosotros" class="bg-[#f7f5eb] py-16 md:py-24 px-4 sm:px-8 md:px-16 relative">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10 lg:gap-16 items-start">
            <article class="lg:w-3/5">
                <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37] block mb-2">Diagnóstico Municipal</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif font-bold mb-6 md:mb-8 text-gray-900 leading-tight">
                    Los residuos no se gestionan donde no se ven.
                </h2>
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
            
            <aside class="w-full lg:w-2/5 flex flex-col sm:flex-row lg:flex-col gap-6">
                <!-- Tarjeta Oscura (Estilo Bento con jerarquía numérica) -->
                <div class="bg-[#1f3622] p-6 sm:p-8 text-white rounded-2xl shadow-lg flex-1 flex flex-col justify-between min-h-[190px]">
                    <div class="flex justify-between items-start">
                        <h3 class="font-bold text-xs uppercase tracking-widest text-[#eab308]">El problema en cifras</h3>
                        <span class="text-xs bg-white/10 px-2.5 py-1 rounded-full text-gray-200">Lerma</span>
                    </div>
                    <div class="my-4">
                        <p class="text-4xl sm:text-5xl font-serif font-bold text-white">8 regiones</p>
                        <p class="text-sm text-gray-300 mt-1">[PENDIENTE: Dato o cifra oficial de toneladas/puntos críticos]</p>
                    </div>
                </div>

                <!-- Tarjeta Amarilla -->
                <div class="bg-[#eab308] p-6 sm:p-8 text-gray-900 rounded-2xl shadow-md flex-1 flex flex-col justify-between min-h-[150px]">
                    <h3 class="font-bold text-xs uppercase tracking-widest text-[#1f3622] mb-2">Sin inventario previo</h3>
                    <p class="text-base font-semibold leading-snug">
                        Un Modelo Integral de Gestión de Residuos Sólidos construido junto a las comunidades del Municipio de Lerma.
                    </p>
                </div>
            </aside>
        </div>
    </section>

    <!-- SECCIÓN: TRES FASES -->
    <section id="fases" class="bg-[#1f3622] text-white py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif font-bold mb-4">Tres fases, dieciséis meses.</h2>
            <p class="mb-12 md:mb-16 text-gray-300 text-base md:text-lg max-w-3xl">
                Del diagnóstico territorial a la implementación de un sistema de monitoreo ciudadano. Noviembre 2025 – Marzo 2027.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Fase 1 -->
                <article class="bg-[#2a452e] border border-white/10 p-6 sm:p-8 rounded-2xl shadow-lg flex flex-col">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-serif font-bold text-gray-100 uppercase">Fase 1</h3>
                        <span class="text-xs bg-[#eab308]/20 text-[#eab308] font-bold px-3 py-1 rounded-full">Nov 2025 - Mar 2026</span>
                    </div>
                    <p class="text-base font-semibold text-white mb-6">Diagnóstico participativo</p>
                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li>Encuestas del sistema de recolección</li>
                        <li>Cartografía colaborativa</li>
                        <li>Entrevistas comunitarias</li>
                    </ul>
                </article>

                <!-- Fase 2 -->
                <article class="bg-[#2a452e] border border-white/10 p-6 sm:p-8 rounded-2xl shadow-lg flex flex-col">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-serif font-bold text-gray-100 uppercase">Fase 2</h3>
                        <span class="text-xs bg-[#eab308]/20 text-[#eab308] font-bold px-3 py-1 rounded-full">Abr 2026 - Nov 2026</span>
                    </div>
                    <p class="text-base font-semibold text-white mb-6">Diseño del Modelo Integral</p>
                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li>Modelo de rutas y separación</li>
                        <li>App de monitoreo ciudadano</li>
                        <li>Campañas de educación ambiental</li>
                    </ul>
                </article>

                <!-- Fase 3 -->
                <article class="bg-[#2a452e] border border-white/10 p-6 sm:p-8 rounded-2xl shadow-lg flex flex-col">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-serif font-bold text-gray-100 uppercase">Fase 3</h3>
                        <span class="text-xs bg-[#eab308]/20 text-[#eab308] font-bold px-3 py-1 rounded-full">Dic 2026 - Mar 2027</span>
                    </div>
                    <p class="text-base font-semibold text-white mb-6">Piloto en campo</p>
                    <ul class="list-disc list-inside space-y-3 text-gray-300 text-sm">
                        <li>Implementación piloto de recolección</li>
                        <li>Evaluación de impacto</li>
                        <li>Entrega al municipio</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: OCHO REGIONES -->
    <section id="comunidades-resumen" class="bg-[#f7f5eb] py-16 md:py-24 px-4 sm:px-8 md:px-16 text-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 md:gap-12 mb-12 md:mb-16">
                <div class="md:w-1/2">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif font-bold leading-tight">
                        Ocho regiones, un solo territorio en disputa.
                    </h2>
                </div>
                <div class="md:w-1/2 text-sm md:text-base text-gray-600 md:border-l-2 border-gray-300 md:pl-6">
                    El municipio de Lerma se divide por regiones, cada una con su propia lógica socio-ambiental, radar industrial y zona de humedales.
                </div>
            </div>
            
            <!-- Cuadrícula responsiva: 1 col en celular pequeño, 2 en celular grande/tablet, 4 en escritorio -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región I: Huitzizilapan</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región II: Xochicuautla</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región III: Atarasquillo</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región IV: Ameyalco</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región V: Lerma</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región VI: Tultepec</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región VII: Peralta - San Bernardino</a>
                <a href="{{ route('comunidades') }}" class="bg-[#e2e4e9] hover:bg-[#1f3622] hover:text-white py-10 px-6 text-center rounded-xl font-semibold text-gray-800 transition-all duration-300 text-sm shadow-sm flex items-center justify-center">Región VIII: Partidas - Parque Industrial</a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CURSOS Y TALLERES -->
    <section id="cursos" class="bg-[#eab308] py-16 md:py-24 px-4 sm:px-8 md:px-16 text-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#1f3622]">Educación Ambiental</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mt-1">Cursos / Talleres</h2>
                </div>
                <a href="{{ route('recursos') }}" class="inline-flex items-center gap-2 bg-[#1f3622] text-white px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider hover:bg-[#2a452e] transition">
                    Ver biblioteca de recursos →
                </a>
            </div>
            <div class="p-8 sm:p-12 bg-black/5 rounded-2xl border border-black/10 text-center">
                <p class="text-sm font-semibold text-gray-800">[PENDIENTE: Listado de próximos cursos y talleres comunitarios]</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: PARTICIPA -->
    <section id="participa-resumen" class="bg-[#f7f5eb] py-16 md:py-24 px-4 sm:px-8 md:px-16 text-gray-900">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2 uppercase tracking-wide">Tú también puedes ser parte</h2>
            <p class="mb-10 md:mb-16 text-sm font-medium text-gray-500 uppercase tracking-wider">
                El proyecto MA-HAI necesita manos, conocimiento y compromiso.
            </p>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Tarjeta Verde: UAM Lerma -->
                <article class="bg-[#d1e2d6] p-8 sm:p-12 rounded-3xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-[#1f3622] rounded-xl mb-6 flex items-center justify-center text-white font-bold">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2L1 12h3v9h6v-6h4v6h6v-9h3L12 2z"/></svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-4 text-gray-900">¿Estudias en la UAM Lerma?</h3>
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
                    <a href="{{ route('participa') }}" class="inline-flex items-center justify-center gap-2 bg-[#1f3622] text-white px-6 py-3.5 rounded-full font-bold text-sm hover:bg-[#2a452e] transition shadow-md w-full sm:w-max">
                        Regístrate al Servicio Social <span aria-hidden="true">→</span>
                    </a>
                </article>
                
                <!-- Tarjeta Naranja: Voluntariado -->
                <article class="bg-[#f4d3c4] p-8 sm:p-12 rounded-3xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-[#b55d37] rounded-xl mb-6 flex items-center justify-center text-white font-bold">
                            <svg aria-hidden="true" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-4 text-gray-900">¿No eres estudiante UAM?</h3>
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
                    <a href="{{ route('participa') }}" class="inline-flex items-center justify-center gap-2 bg-[#b55d37] text-white px-6 py-3.5 rounded-full font-bold text-sm hover:bg-[#9a4b2a] transition shadow-md w-full sm:w-max">
                        Quiero ser voluntario <span aria-hidden="true">→</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection