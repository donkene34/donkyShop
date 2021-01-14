<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>dd34mob</title>
</head>
<body>
    <header>
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        <div class="container_logo"><div class="logo"><span>donky</span><br>shop</div></div>
        <div class="panier"><a href="{{ route('cart.index') }}">panier</a><span class="nbr">{{ Cart::count() }}</span></div>
        <div class="menu">
            <div class="acceuil"><a href="index.html">acceuil</a></div>
            <div class="immobilier"><div class="titre"><div class="tomato"></div><p>immobilier</p></div>
            <ul>
                <li><div class="tomato_small"></div>chambre</li>
                <li><div class="tomato_small"></div>appartement</li>
                <li><div class="tomato_small"></div>maison</li>
            </ul>
        </div>
        <div class="immobilier"><div class="titre"><div class="tomato"></div> <p>accesoires</p></div>
            <ul>
                <li><div class="tomato_small"></div>chaises</li>
                <li><div class="tomato_small"></div>tables</li>
                <li><div class="tomato_small"></div>salle a manger</li>
            </ul>
        </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
