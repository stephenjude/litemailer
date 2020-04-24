<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700&display=swap"
        rel="stylesheet">
    <title>@yield('title') | LiteMailer</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="min-h-screen">

    @include('navbar')

    <main>
        @yield('content')
    </main>

    @include('footer')
</body>

</html>
