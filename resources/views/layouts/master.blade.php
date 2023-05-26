<html>

<head>
    <title>Clash of clans @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
    @section('navbar')
    <div class="logo">
        <a href="https://play.google.com/store/apps/details?id=com.supercell.clashofclans&hl=pl&gl=US">
        <p class="clash">CLASH</p> <br>
        of CLANS</a>
    </div>
    @show

    @section('content-left')
<div class="content-left">
        <div class="dots">
            <i class="dot"></i>
            <i class="dot ON"></i>
            <i class="dot"></i>
            <i class="dot"></i>
        </div>

        <div class="info">
            <div class="description">
                <center>
                    <h1>Hogrider</h1>
                </center>
                <div class="dsc">
                    Description
                </div>
            </div>
            <div class="stats row">
                <div class="stat col-4">
                    <i class="fa-solid fa-shield"></i>
                    Defense 15
                </div>
                <div class="stat col-4">
                    <i class="fa-solid fa-dagger"></i>
                    <img src="icons/attack.jpg" class="attack"/>
                    Attack Speed 21
                </div>
                <div class="stat col-4">
                    <i class="fa-solid fa-crosshairs"></i>
                    Preffered Target 12
                </div>
                <div class="stat col-4">
                    <i class="fa-solid fa-clock"></i>
                    Training Time 9
                </div>
            </div>
            <a href="/" class="more">MORE DETAILS</a>
        </div>
    </div>
    @show
    <div class="content-right">
    @yield('content')

    </div>
</body>

</html>