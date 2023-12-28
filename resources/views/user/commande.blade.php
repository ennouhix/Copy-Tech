<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <title>commande</title>

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
                        <a class="nav-link mx-2" href="#">Vos Commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Autre services</a>
                    </li>
                </ul>
            </div>

            <a href="/logout"><button class="btn btn-outline-danger">Déconnexion</button></a>
        </div>
    </nav>
    <div class="container mt-4">
    <h1>La Liste de vos commandes</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Professeur</th>
                <th>type d'impression</th>
                <th>Filiere</th>
                <th>Nombre de copies</th>
                <th>Format</th>
                <th>Print Type</th>
                <th>Color</th>
                <th>print style</th>
                <th>Pdf path</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->professeur }}</td>
                <td>{{ $order->impression_type }}</td>
                <td>{{ $order->filiere }}</td>
                <td>{{ $order->ncopies }}</td>
                <td>{{ $order->format }}</td>
                <td>{{ $order->print_type }}</td>
                <td>{{ $order->color }}</td>
                <td>{{ $order->print_style }}</td>
                <td>{{ $order->pdf_path }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <!-- User Dashboard Section -->

            </div>
        </div>
    </div>

</body>

</html>
