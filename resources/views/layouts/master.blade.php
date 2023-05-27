<html>

<head>
    <title>Clash of clans @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
</head>

<body>
    @section('navbar')
    <div class="logo">
        <a href="https://play.google.com/store/apps/details?id=com.supercell.clashofclans&hl=pl&gl=US" target="_blank">
            <p class="clash">CLASH</p> <br>
            of CLANS
        </a>
    </div>
    @show

    @section('content-left')
    <div class="content-left">
        <div class="info-bg" style="background-image: url('image/pekka.png');"></div>
        <div class="dots">
            <i class="dot" id="1"></i>
            <i class="dot ON" id="2"></i>
            <i class="dot" id="3"></i>
            <i class="dot" id="4"></i>
        </div>

        <div class="info">
            <div class="description">
                <center>
                    <h1>P.E.K.K.A</h1>
                </center>
                <div class="dsc">
                    P.E.K.K.A is a big unit unlocked in the standard Barracks when it is upgraded to level 10 which requires Town Hall level 8. She is a slow single-target melee Elixir Troop that occupies a big amount of housing space but comes with large amounts of hitpoints and damage.
                </div>
            </div>
            <div class="stats row">
                <div class="stat col-6">
                    <i class="fa-solid fa-crosshairs"></i>
                    Preffered Target: Walls
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-house-flood-water"></i>
                    Housing Space: 6
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-person-running"></i>
                    Movement speed: 15
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-dagger"></i>
                    <img src="icons/attack.png" class="attack" />
                    Attack Speed: 21
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-clock"></i>
                    Training Time: 1m
                </div>
            </div>
        </div>
        <div class="details">
            <a href="/" class="more">MORE DETAILS</a>
        </div>
    </div>
    @show
    <div class="content-right">
        @yield('content')

    </div>
</body>

</html>