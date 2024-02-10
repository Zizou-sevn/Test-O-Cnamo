<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>

    @section('vite')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>

<body>

    <!-- Premier Cycle -->

    <div class="font">
        <h1 id="id_1" class="title-big"><a href="Accueil.html">O'Cnamo</a></h1>

        <div class="barre_2">

            <ul class="sous-barre">
                <li><a href={{ route('main.accueil') }}>Accueil</a></li>
                <li><a href={{ route('main.menu') }}>Menu</a></li>
                <li><a href={{ route('main.reservation') }}>Reservation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

    <footer class="barre_25">
        @section('footer')

            <div class="barre_26">
                <ul class="sous-barre_2">
                    <li>Adresse</li>
                    <li>Horaire d’ouverture</li>
                    <li>Contact</li>
                </ul>
            </div>

            <div class="barre_27">

                <ul class="sous-barre_3">
                    <ul class="sous-barre_4">
                        <li>5 Bd LouiXIV <br>59800 Lille</li>
                    </ul>

                    <ul class="sous-barre_5">
                        <li> <span class="brun">lundi - Vendredi</span> (12h-14h) à (19h-23h) <br>
                            Samedi et Dimanche (12h-14h) à (19h-23h)</li>
                    </ul>


                    <ul class="sous-barre_6">
                        <li class="brun_2">
                            <div class="icone_1"></div> ocnamo@gmail.com
                        </li>
                        <li class="brun_3">
                            <div class="icone_2"></div> 06-32-45-67-21
                        </li>
                    </ul>

                </ul>
            </div>

            <div class="trait"></div>
            <br>
            <div class="barre_28">

                <ul class="para_3">
                    <li>
                        <div class="icone_3"></div> 2024, Ocnamo, tous droits réservés
                    </li>
                </ul>

                <ul class="sous-barre_7">
                    <li><a href="#" id="li_2"></a></li>
                    <li><a href="#" id="li_3"></a></li>
                    <li><a href="#" id="li_4"></a></li>
                    <li><a href="#" id="li_5"></a></li>
                </ul>
            </div>

        @show
    </footer>
</body>


</html>
