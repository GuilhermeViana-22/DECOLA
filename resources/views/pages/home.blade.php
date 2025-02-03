
@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <!-- Banner -->
    @include('components.banner.banner') <!-- Inclui o arquivo banner.blade.php -->

    <!-- About -->
    @include('components.about.about') <!-- Inclui o arquivo about.blade.php -->

    <!-- Missão -->
    @include('components.missao.missao') <!-- Inclui o arquivo missao.blade.php -->

    <!-- Curso -->
    @include('components.curso.curso') <!-- Inclui o arquivo curso.blade.php -->

    <!-- Resultados -->
    @include('components.resultados.resultados') <!-- Inclui o arquivo resultados.blade.php -->

    <!-- Depoimentos -->
    @include('components.depoimentos.depoimentos') <!-- Inclui o arquivo depoimentos.blade.php -->

    <!-- Notícias -->
    @include('components.news.news') <!-- Inclui o arquivo news.blade.php -->
@endsection
