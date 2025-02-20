@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <div class="constructionc-container">
        <div class="constructionc-content">
            <!-- SVG simples para ilustrar a construção -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <circle cx="50" cy="50" r="40" stroke="gray" stroke-width="4" fill="none" />
                <circle cx="50" cy="50" r="40" stroke="orange" stroke-width="4" fill="none" stroke-dasharray="251.2" stroke-dashoffset="125.6">
                    <animate attributeName="stroke-dashoffset" from="251.2" to="0" dur="2s" repeatCount="indefinite" />
                </circle>
            </svg>
            <h2 class="constructionc-title">Essa página está sendo construída!</h2>
            <p class="constructionc-text">Em breve traremos muitas novidades sobre a <strong>Decola School</strong>.</p>
        </div>
    </div>
@endsection
