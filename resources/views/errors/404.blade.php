<!-- 3. Nuevo archivo: resources/views/errors/404.blade.php -->
@extends('layouts.app')

@section('title', 'Página no encontrada (404) | MA-HAI UAM Lerma')

@section('content')
<section class="min-h-[60vh] flex flex-col items-center justify-center text-center px-8 py-24 bg-[#f7f5eb]">
    <span class="text-sm font-bold uppercase tracking-widest text-[#b55d37] mb-2">Error 404</span>
    <h1 class="text-4xl md:text-6xl font-serif font-bold text-[#1f3622] mb-4">Ruta fuera del mapa</h1>
    <p class="text-gray-700 max-w-md mb-8">
        La página que buscas no existe o fue movida dentro de nuestra plataforma.
    </p>
    <a href="{{ route('inicio') }}" class="bg-[#1f3622] text-white px-8 py-3 rounded-full font-bold text-sm hover:bg-[#2a452e] transition">
        Volver al inicio &rarr;
    </a>
</section>
@endsection
