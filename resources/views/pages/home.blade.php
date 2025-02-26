@extends('layouts.app') <!-- Estende o layout base -->
@section('content')
    @include('components.banner.banner-mobile')
    @include('components.banner.banner')
    @include('components.about.about')
    @include('components.missao.missao')
    @include('components.resultados.resultados')
    @include('components.curso.curso')
    @include('components.depoimentos.depoimentos')
    @include('elements.charts.charts')
    @include('components.news.news')
@endsection
