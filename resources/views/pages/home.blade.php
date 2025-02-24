@extends('layouts.app') <!-- Estende o layout base -->
@section('content')
    @include('components.banner.banner') <!-- Inclui o arquivo banner.blade.php -->



 @include('components.about.about')
 @include('components.missao.missao')
    @include('components.resultados.resultados')
    @include('components.curso.curso')
    @include('components.depoimentos.depoimentos')
    <div class="container my-5">
        @include('elements.custom-ui.card-skills')
        @include('elements.custom-ui.skills')
    </div>

    @include('components.news.news')

    {{-- <h2 class=" section-title text-center p-4 mt-4 mb-4">Comparação de Desempenho - Estudantes com e sem Soft Skills</h2>
    <canvas id="barChart" width="800" height="600" class="p-4 mt-4 mb-4"></canvas> --}}
    @include('elements.cookies.cokkie')
@endsection
