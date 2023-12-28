<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
        <h2><img src="{{ asset('img/esith-copy.png') }}" alt="Logo de esith"></h2>

            <ul>
                <li><a href="dashboard"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="{{ route('sdc') }}"><i class="fas fa-file"></i>Saisie de commande</a></li>
                <li><a href="table"><i class="fas fa-envelope"></i>Commande reçue</a></li>
                <li><a href="#"><i class="fas fa-window-maximize"></i>toutes les commandes</a></li>
                <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>
            </ul>
            <div class="social_media">
            </div>
        </div>
        <div class="main_content">
                        @if(session('success'))
                            <div class="notification">
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif


            <center>
            @auth
                <div class="header">Bonjour {{ auth()->user()->name }} de centre de copie .</div>
            </center>
            @else
                <div class="header">not logged in</div>
                <div class="info">
            @endauth
                <center>
                    <p style="text-align: center; font-size: 30px;">page d'Accueil </p>
                </center>
                <div></div>
            </div>
        </div>
    </div>
    

</body>

</html>
