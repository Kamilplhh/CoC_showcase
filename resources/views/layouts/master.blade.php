<html>

<head>
    <title>Clash of clans @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        <div class="dots">
            <i class="dot" id="21"></i>
            <i class="dot ON" id="22"></i>
            <i class="dot" id="23"></i>
            <i class="dot" id="24"></i>
        </div>

        @foreach ($characters as $character)
        <div class="info" id="{{ 10 + $character->id }}">
            <div class="info-bg">
                <img src="{{ url('image/'.$character->src) }}" class="img-bg" />
            </div>
            <div class="description">
                <center>
                    <h1>{{ $character->name }}</h1>
                </center>
                <div class="dsc">
                {{ $character->description }}
                </div>
            </div>
            <div class="stats row">
                <div class="stat col-6">
                    <i class="fa-solid fa-crosshairs"></i>
                    Preffered Target: {{ $character->stat->target }}
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-house-flood-water"></i>
                    Housing Space: {{ $character->stat->housing }}
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-person-running"></i>
                    Movement speed: {{ $character->stat->speed }}
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-dagger"></i>
                    <img src="icons/attack.png" class="attack" />
                    Attack Speed: {{ $character->stat->attack }}s
                </div>
                <div class="stat col-6">
                    <i class="fa-solid fa-clock"></i>
                    Training Time: {{ $character->stat->time }}
                </div>
            </div>
        </div>
        @endforeach
        
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