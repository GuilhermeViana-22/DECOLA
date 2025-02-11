@extends('layouts.app') <!-- Estende o layout base -->

@section('content')
    <div class="construction-container">
        <div class="construction-content">
            <!-- SVG simples para ilustrar a construção -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <circle cx="50" cy="50" r="40" stroke="gray" stroke-width="4" fill="none" />
                <circle cx="50" cy="50" r="40" stroke="orange" stroke-width="4" fill="none" stroke-dasharray="251.2" stroke-dashoffset="125.6">
                    <animate attributeName="stroke-dashoffset" from="251.2" to="0" dur="2s" repeatCount="indefinite" />
                </circle>
            </svg>
            <h2>Essa página está sendo construída!</h2>
            <p>Em breve traremos muitas novidades sobre a <strong>Decola School</strong>.</p>
        </div>
    </div>
@endsection

<style>
    /* CSS para centralizar o conteúdo */
    .construction-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
        text-align: center;
    }

    .construction-content {
        max-width: 90%;
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    svg {
        margin-bottom: 15px;
    }

    h2 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.2rem;
        color: #666;
    }

    @media (max-width: 600px) {
        h2 {
            font-size: 1.5rem;
        }

        p {
            font-size: 1rem;
        }
    }
</style>
