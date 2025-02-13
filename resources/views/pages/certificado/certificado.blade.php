@extends('layouts.app')

@section('content')
    <!-- Seção de Banner -->
    <section class="bg-danger text-white py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texto Principal -->
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Consulta de Certificados</h1>
                    <p class="lead">Digite o código do certificado e a data de emissão para verificar sua disponibilidade.</p>
                </div>
                <!-- Ícone do Foguete Destacado -->
                <div class="col-lg-6 text-center position-relative">
                    <div class="rocket-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/744/744929.png" alt="Foguete" class="img-fluid rocket-icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Formulário -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-danger text-white text-center">
                            <h3 class="mb-0">Buscar Certificado</h3>
                        </div>
                        <div class="card-body p-4">
                            <p class="text-muted text-center mb-4">Insira o código e a data de emissão do certificado.</p>
                            <form>
                                <div class="mb-3">
                                    <label for="codigoCertificado" class="form-label">Código do Certificado</label>
                                    <input type="text" class="form-control" id="codigoCertificado" placeholder="Digite o código do certificado" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dataEmissao" class="form-label">Data de Emissão</label>
                                    <input type="date" class="form-control" id="dataEmissao" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger btn-lg">Consultar Certificado</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
