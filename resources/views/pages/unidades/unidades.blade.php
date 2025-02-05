@extends('layouts.app')

@section('content')
<div class="bg-danger text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto -->
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Conheça nossas unidades</h1>
                <p class="fs-4">Encontre a unidade mais próxima de você e venha nos visitar!</p>
            </div>
            <!-- Imagem do foguete -->
            <div class="col-md-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Card Template -->
            @foreach ($unidades as $unidade)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('arquivos/unidades/' . $unidade['imagem']) }}" class="card-img-top" alt="Unidade {{ $unidade['nome'] }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">{{ $unidade['nome'] }}</h5>
                            <p class="card-text">{{ $unidade['endereco'] }}</p>
                            <a href="{{ $unidade['link_maps'] }}" target="_blank" class="btn btn-danger">
                                <i class="fas fa-map-marker-alt"></i> Conhecer
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
