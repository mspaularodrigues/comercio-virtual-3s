<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Links para CSS, fontes e outros arquivos de cabeçalho -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Inclusão do Header -->
    @include('partials.header')

    <!-- O conteúdo da página será injetado aqui -->
    <main>
        @yield('content')
    </main>

    <!-- Inclusão do Footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
