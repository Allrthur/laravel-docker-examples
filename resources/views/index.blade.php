<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>
            This is a blade made by <strong style="color:rgba(6,71,160,255);">{{ $author }}</strong>
        </h1>
        @if("America/Sao_Paulo" != $timezone)
            <p style="color:rgba(125,125,125,255);">Timezone is {{ $timezone }}, changing it to America/Sao_Paulo...</p>
            <?php date_default_timezone_set("America/Sao_Paulo") ?>
        @endif
        <h4>It is currently {{ date("Y/m/d\TH:i:s")  }}</h4>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
