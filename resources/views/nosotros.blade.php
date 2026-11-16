@extends('layouts.app')

@section('title', 'Sobre Nosotros | MA-HAI - UAM Lerma')

@section('content')
    <!-- HERO: ¿QUIÉNES SOMOS? -->
    <section class="relative w-full min-h-[40vh] md:min-h-[50vh] flex items-end justify-center pb-6 sm:pb-8 px-4 sm:px-8 bg-cover bg-center bg-gray-900"
             style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('{{ asset('images/quienes_somos.png') }}');">
        <!-- [PENDIENTE: Reemplazar MA-HAI.gif por fotografía grupal limpia en public/images/equipo-nosotros.webp] -->
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif font-bold text-white tracking-wider text-center drop-shadow-md">
            ¿Quiénes somos?
        </h1>
    </section>

    <!-- SECCIÓN: NUESTRA HISTORIA (Contexto UAM Lerma + Línea del tiempo) -->
    <section class="bg-white py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37] block mb-2">Origen e identidad</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6">Nuestra Historia</h2>

            <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-12 max-w-4xl">
                La <strong>Universidad Autónoma Metropolitana (UAM)</strong> —creada en 1973 e iniciada en 1974 tras el movimiento estudiantil de 1968— fundó su <strong>Unidad Lerma</strong> en 2009 en el Estado de México. Esta sede se distingue por un modelo educativo centrado en la interdisciplina y el trabajo colaborativo mediante talleres, laboratorios, seminarios interdivisionales y proyectos aplicados al territorio.
            </p>

            <div class="relative border-l-2 border-gray-300 ml-4 sm:ml-12 pl-8 sm:pl-12 space-y-12">
                <!-- Hito 1 -->
                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37]">13 de agosto de 2025 · Aprobación académica</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Aprobación en el Consejo Divisional de CSH</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        En la sesión 213 del Consejo Divisional de Ciencias Sociales y Humanidades (CSH) de la UAM Lerma se aprueba formalmente el proyecto de investigación <em>«Desarrollo de un Modelo Integral de Gestión de Residuos Sólidos para el municipio de Lerma, Estado de México»</em>, bajo la responsabilidad de la Dra. María Gabriela Martínez Tiburcio.
                    </p>
                </div>

                <!-- Hito 2 -->
                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#1f3622]">3 de octubre de 2025 · Alianza de Triple Hélice</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Convenio interinstitucional para Proyectos Sinergia</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        Se firma el convenio de colaboración bajo la modalidad de triple hélice entre la <strong>UAM Unidad Lerma</strong>, el <strong>Ayuntamiento de Lerma</strong> y la asociación civil <strong>Semilla del Corazón A.C.</strong>, articulando academia, gobierno y sociedad civil para postular a la convocatoria de <em>Proyectos Sinergia</em> del COMECYT.
                    </p>
                </div>

                <!-- Hito 3 -->
                <div class="relative">
                    <span class="absolute -left-[41px] sm:-left-[57px] top-1 w-4 h-4 rounded-full bg-gray-900 ring-4 ring-white" aria-hidden="true"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#b55d37]">25 de febrero de 2026 · Inicio formal</span>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mt-1">Arranque del proyecto financiado por el COMECYT</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2 leading-relaxed">
                        Tras resultar beneficiado con recursos del Consejo Mexiquense de Ciencia y Tecnología (COMECYT), inicia formalmente el proyecto bajo el título <em>«Desarrollo de un modelo integral de gestión de residuos sólidos para el municipio de Lerma: Un enfoque sostenible e innovador»</em>.
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
                            Consolidarse como un proyecto de referencia en el municipio de Lerma por su contribución a la gestión integral y sostenible de los residuos sólidos, mediante la investigación interdisciplinaria, la innovación y la participación corresponsable de las comunidades, las autoridades y la ciudadanía, impulsando una cultura ambiental que favorezca la reducción, separación y aprovechamiento de los residuos.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: VALORES -->
    <section class="bg-white py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Valores</h2>
            <p class="text-sm sm:text-base text-gray-600 mb-12 max-w-3xl leading-relaxed">
                Nuestro trabajo se guía por los principios éticos de la UAM: dignidad, diversidad, inclusión, equidad, honradez, legalidad, transparencia, pensamiento crítico y vocación de servicio a la sociedad.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Corresponsabilidad social</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Generar nuevo conocimiento e innovar con soluciones aplicables a problemas sociales relevantes, promoviendo una cultura ambiental y responsabilidad ciudadana en Lerma.
                    </p>
                </article>

                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Participación comunitaria</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Involucrar a las comunidades en las estrategias del proyecto para fomentar la separación de residuos y reconocer el trabajo y los riesgos que enfrentan las personas recolectoras.
                    </p>
                </article>

                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Sustentabilidad y conciencia</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Diseñar e implementar campañas de educación ambiental y difusión digital sobre separación, compostaje y disposición final de residuos especiales en las comunidades.
                    </p>
                </article>

                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Transparencia</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Garantizar el libre y pleno acceso a la información recolectada en campo y a los hallazgos de la investigación para informar a todas las regiones y montañas de Lerma.
                    </p>
                </article>

                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Empatía</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Escuchar e integrar las perspectivas de trabajadores de recolección, operadores de ruta, delegados, ciudadanía y sector educativo para construir una visión holística del problema.
                    </p>
                </article>

                <article class="p-6 sm:p-7 rounded-2xl bg-[#f7f5eb] border border-black/5 flex flex-col justify-start">
                    <h3 class="font-bold text-[#1f3622] text-base sm:text-lg mb-2">Co-creación</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Articular distintas disciplinas a través de talleres de separación, compostaje y cartografía participativa para construir soluciones conjuntas con la comunidad.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CONOCE AL EQUIPO MA-HAI (Bento Grid asimétrico) -->
    <section class="bg-[#e5e7eb] py-16 md:py-24 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#1f3622] mb-10">Conoce al equipo MA-HAI</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Tarjeta Grande Izquierda (Responsable del proyecto) -->
                <article class="bg-white rounded-3xl p-8 shadow-sm lg:row-span-2 flex flex-col justify-between min-h-[260px]">
                    <div>
                        <span class="inline-block bg-[#1f3622]/10 text-[#1f3622] text-xs font-bold uppercase px-3 py-1 rounded-full mb-4">
                            Responsable del Proyecto
                        </span>
                        <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">
                            Dra. María Gabriela Martínez Tiburcio
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Coordinación general del proyecto de investigación <em>«Desarrollo de un modelo integral de gestión de residuos sólidos para el municipio de Lerma: Un enfoque sostenible e innovador»</em> en la Universidad Autónoma Metropolitana, Unidad Lerma.
                        </p>
                    </div>
                    <p class="text-xs font-semibold text-gray-400 mt-6 uppercase tracking-wider">UAM Unidad Lerma · División de CSH</p>
                </article>

                <!-- Tarjeta Derecha Superior (Personal académico UAM Lerma) -->
                <article class="bg-white rounded-3xl p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="inline-block bg-[#eab308]/20 text-gray-900 text-xs font-bold uppercase px-3 py-1 rounded-full mb-4">
                            Personal Académico · UAM Lerma
                        </span>
                        <ul class="space-y-2 text-sm sm:text-base font-semibold text-gray-800">
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#1f3622] flex-shrink-0" aria-hidden="true"></span>
                                Dra. Karla Pelz Serrano
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#1f3622] flex-shrink-0" aria-hidden="true"></span>
                                Dr. Jesús Ramiro Félix Félix
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#1f3622] flex-shrink-0" aria-hidden="true"></span>
                                Dr. Lázaro Raymundo Reyes Gutiérrez
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#1f3622] flex-shrink-0" aria-hidden="true"></span>
                                Mtro. Mario Alberto Ramírez Reyna
                            </li>
                        </ul>
                    </div>
                </article>

                <!-- Tarjeta Derecha Inferior (Colaboradores externos) -->
                <article class="bg-white rounded-3xl p-8 shadow-sm flex flex-col justify-between">
                    <div>
                        <span class="inline-block bg-[#f4d3c4] text-[#b55d37] text-xs font-bold uppercase px-3 py-1 rounded-full mb-4">
                            Colaboradores Externos
                        </span>
                        <ul class="space-y-2 text-sm sm:text-base font-semibold text-gray-800">
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#b55d37] flex-shrink-0" aria-hidden="true"></span>
                                Dr. Alan Rodríguez Guerrero
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-[#b55d37] flex-shrink-0" aria-hidden="true"></span>
                                Lic. Edgar Gutiérrez Tapia
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: ALIANZAS -->
    <section class="bg-white py-16 px-4 sm:px-8 md:px-16">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#1f3622] mb-3">Alianzas</h2>
            <p class="text-sm text-gray-600 mb-10 max-w-2xl">
                Articulación interinstitucional bajo el modelo de triple hélice y financiamiento científico para el desarrollo territorial de Lerma.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Tarjeta Logo UAM Lerma -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex flex-col items-center justify-center h-36 text-center">
                    <img src="{{ asset('images/Logo-uam.png') }}"
                         alt="Logo de la Universidad Autónoma Metropolitana, Unidad Lerma"
                         loading="lazy"
                         width="240"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>

                <!-- Tarjeta Logo Ayuntamiento de Lerma -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex flex-col items-center justify-center h-36 text-center">
                    <img src="{{ asset('images/logo-lerma.png') }}"
                         alt="Logo del Ayuntamiento de Lerma, Somos Todos"
                         loading="lazy"
                         width="200"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>

                <!-- Tarjeta Semilla del Corazón A.C. -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex flex-col items-center justify-center h-36 text-center">
                    <img src="{{ asset('images/logo-semillas.png') }}"
                         alt="Logo de la asociación civil Semillas del Corazón"
                         loading="lazy"
                         width="200"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>

                <!-- Tarjeta COMECYT -->
                <div class="p-6 rounded-2xl border border-gray-200 bg-[#f7f5eb]/50 flex flex-col items-center justify-center h-36 text-center">
                    <img src="{{ asset('images/logo-comecyt.png') }}"
                         alt="Logo del COMECYT"
                         loading="lazy"
                         width="200"
                         height="80"
                         class="max-h-16 sm:max-h-20 w-auto object-contain">
                </div>
            </div>
        </div>
    </section>
@endsection