@extends('layouts.app') <!-- Estende o layout base -->
@section('content')
    @include('components.banner.banner') <!-- Inclui o arquivo banner.blade.php --> --
    @include('components.about.about') <!-- Inclui o arquivo about.blade.php
    @include('components.missao.missao')
    @include('components.resultados.resultados')
    @include('components.curso.curso')
    @include('components.depoimentos.depoimentos')
    @include('components.news.news')
    @include('elements.cookies.cokkie')
@endsection
