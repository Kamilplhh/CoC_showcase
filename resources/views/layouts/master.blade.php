<html>

<head>
    <title>Clash of clans @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
    @section('navbar')
    <div class="logo">
       <p class="clash">CLASH</p> <br> 
        of CLANS
    </div>
    @show
    @yield('content')


    </div>
</body>

</html>