<html>
    <head>
        <title>
            Library Nangor
        </title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script rel="stylesheet" type="text/css" src="/js/app.js"> </script>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>
        <header>
            <h1> Nangor Library </h1>
            <p> Mari membaca buku sebelum kiamat datang</p>
            <nav>
                <a href="/perpus"> Home </a> |
                <a href="/perpus/add"> Add </a> |
                <a href="/perpus/view"> View </a> |
            </nav>
        </header>

        <hr>
        <br>
        <br>

        <!--  ini yang di ubah ubah -->
        <!-- bagian judul halaman blog -->
        <h2> @yield('judul_hal')</h2>

        <!-- konten -->
        @yield('konten')

        <br>
        <br>
        <hr>
        <footer>
            <p> &copy; Risyad Pangestu 2019 </p>
        </footer>

    </body>
</html>