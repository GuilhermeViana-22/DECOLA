@extends('layouts.app') <!-- Estende o layout base -->
@section('content')
@include('components.banner.banner-mobile')
    @include('components.banner.banner')
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
    @include('components.elements.chart.chat')


    @include('elements.cookies.cokkie')
@endsection
