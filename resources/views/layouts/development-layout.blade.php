<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>INDOASPHALT - Fully Extracted Asphalt Buton</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/dev.css">
    @stack('css')
</head>

<body>
    <x-development.navbar />

    <header id="header" class="hero">
        <div class="container">
            @yield('header-content')
        </div>
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer id="footer" class="footer dark-background">
        <x-development.footer />
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('js')
</body>

</html>