
@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <!-- Banner -->
    @include('components.banner.banner') <!-- Inclui o arquivo banner.blade.php --> --

    <!-- About -->
     @include('components.about.about') <!-- Inclui o arquivo about.blade.php

    <!-- Miss�o -->
    @include('components.missao.missao') <!-- Inclui o arquivo missao.blade.php -->

      <!-- resultados -->
      @include('components.resultados.resultados') <!-- Inclui o arquivo missao.blade.php -->


     <!-- Cursos -->
     @include('components.curso.curso') <!-- Inclui o arquivo missao.blade.php -->

    <!-- Depoimentos -->
    @include('components.depoimentos.depoimentos') <!-- Inclui o arquivo depoimentos.blade.php


@endsection
