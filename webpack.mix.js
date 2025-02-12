const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

// Garantindo que o arquivo de estilo externo seja concatenado corretamente
mix.styles([
    'public/sbadmin/css/styles.css',
], 'public/css/all.css');

// Versão para cache busting (recomendado em produção)
mix.version();
