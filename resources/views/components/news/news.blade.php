<style>
    .newsletter-section {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
    }

    .newsletter-box {
        max-width: 500px;
        text-align: center;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .newsletter-box h2 {
        color: #dc3545;
        margin-bottom: 10px;
    }

    .newsletter-box p {
        color: #6c757d;
        font-size: 16px;
    }

    .newsletter-box .form-label {
        font-weight: bold;
        color: #343a40;
    }

    .newsletter-box .form-control {
        padding: 12px;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .btn-newsletter {
        background-color: #dc3545;
        color: white;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        transition: 0.3s;
        border: none;
    }

    .btn-newsletter:hover {
        background-color: #b02a37;
    }
</style>

<div class="newsletter-section">
    <div class="newsletter-box">
        <h2>Assine nossa Newsletter</h2>
        <p>Fique por dentro das novidades da Decola de Soft Skills!</p>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Seu e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
            </div>
            <br>
            <br>
         
            <button type="submit" class="btn btn-newsletter w-100">Enviar</button>
        </form>
    </div>
</div>
