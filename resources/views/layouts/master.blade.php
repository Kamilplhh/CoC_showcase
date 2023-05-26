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
    <div class="content">
        <div class="dots">
            <i class="dot"></i>
            <i class="dot ON"></i>
            <i class="dot"></i>
            <i class="dot"></i>
        </div>

        <div class="info">
            <div class="description">

            </div>
            <div class="stats">
                
            </div>
            <a href="/" class="more">MORE DETAILS</a>
        </div>
    </div>
</body>

</html>