<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <title>User Dashboard</title>

    <!-- Add Bootstrap CSS and JS links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/esith.png" height="60" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="dashboard">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('commande') }}">Vos Commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Autre services</a>
                    </li>
                </ul>
            </div>

            <a href="/logout"><button class="btn btn-outline-danger">Déconnexion</button></a>
        </div>
    </nav>

    <!-- User Dashboard Section -->
     <div class="main-box">
        <div class="top">
            <div class="box">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @auth
                    <p>Bonjour <b>{{ auth()->user()->name }}</b>, Bienvenu à l'interface de la gestion de centre de copie.</p><br>
                @else
                    <p>You are not logged in.</p>
                @endauth
            </div>
        </div>

        <!-- Order Form Section -->
        <div class="bottom">
            <div class="box">
            <form action="/submit-order" method="post" enctype="multipart/form-data">
            @csrf
                    <h2>Formulaire de Commande</h2><br>
                    <!-- Your existing form fields here -->

                    <!-- Updated to use Blade syntax for displaying user's email -->
                    <label for="Professeur">Professeur:</label>
                    <input type="text" id="Professeur" name="Professeur" value="{{ auth()->user()->name }}" readonly required><br><br>
                    <label for="Impression">Impression : </label>

                    <div class="radio-container">
                        <input type="radio" id="examen" name="impression" value="exman"><label for="examen">Examen</label>
                        <input type="radio" id="cours"  name="impression" value="cours"><label for="cours">Cours</label>
                    </div>
                    <br>

                    <label for="filiere">Filière:</label>
                    <input type="text" id="filiere" name="filiere" required><br><br>

                    <label for="ncopies">Nombre de copies :</label>

                    <input type="number" id="ncopies" name="ncopies" required><br><br>

                    <label for="Format">Format :</label>
                    <select id="Format" name="Format">
                        <option value="a3">A3</option>
                        <option value="a4">A4</option>
                    </select><br><br>

                    <label for="type">Type :</label>
                    <select id="type" name="type">
                        <option value="recto">Recto</option>
                        <option value="recto-verso">Recto-Verso</option>
                    </select><br><br>

                    <label for="couleur">Couleur :</label>
                    <select id="couleur" name="couleur">
                        <option value="blanc/noir">Blanc/Noir</option>
                        <option value="couleur">Couleur</option>
                    </select><br><br>

                    <label for="timpression">Type d'impression :</label>
                    <select id="timpression" name="timpression">
                        <option value="eco">Eco</option>
                        <option value="gras">Gras</option>
                    </select><br><br>

                    <label for="datetime">Date et Heure :</label>
                        <input type="datetime-local" id="datetime" name="datetime" required><br><br>

                    <label for="pdfFile">Fichier PDF:</label>
                    <input type="file" id="pdfFile" name="pdfFile" accept=".pdf" required><br><br>



                    

                    <input type="submit" value="Soumettre la Commande">
                </form>
            </div>
        </div>
    </div>

</body>

</html>
