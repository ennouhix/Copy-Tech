<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Saisie de Commandes</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
                  <h2><img src="{{ asset('img/esith-copy.png') }}" alt="Logo de esith"></h2>
            <ul>
                <li><a href="dashboard"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="sdc"><i class="fas fa-file"></i>Saisie de Commandes</a></li>
                <li><a href="admin/table"><i class="fas fa-envelope"></i>Commandes Reçues</a></li>
                <li><a href="#"><i class="fas fa-window-maximize"></i>Toutes Les Commandes</a></li>
                <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>
            </ul>
        </div>

        <div class="main_content">
            <!-- Add this code where you want to display the confirmation message -->
                @if(session('success'))
                    <div class="center-container">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif


            <center>
                <div class="header">Veuillez Remplir les Champs ci-dessous :</div>
            </center>
            <div class="info">
                <div class="box">
                    <form action="{{ route('submit.commande') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <h2>Formulaire de Commande</h2>

                        <label for="Professeur">Professeur:</label>
                        <input type="text" id="Professeur" name="Professeur" required><br><br>

                        <label for="Impression">Impression : </label>
                        <input type="radio" id="examen" name="Impression" value="exman"><label for="examen">Examen</label>
                        <input type="radio" id="cours" name="Impression" value="cours"><label for="cours">Cours</label><br><br>

                        <label for="Filiere">filiere:</label>
                        <input type="text" id="Filiere" name="Filiere" required><br><br>

                        <label for="NCopies">Nombre de copies :</label>
                        <input type="number" id="NCopies" name="NCopies" required><br><br>

                        <label for="Format">Format :</label>
                        <select id="Format" name="Format">
                            <option value="a3">A3</option>
                            <option value="a4">A4</option>
                        </select><br><br>

                        <label for="Type">Type :</label>
                        <select id="Type" name="Type">
                            <option value="recto">Recto</option>
                            <option value="recto-verso">Recto-Verso</option>
                        </select><br><br>

                        <label for="Couleur">Couleur :</label>
                        <select id="Couleur" name="Couleur">
                            <option value="blanc/noir">Blanc/Noir</option>
                            <option value="couleur">Couleur</option>
                        </select><br><br>

                        <label for="TImpression">Type d'impression</label>
                        <select id="TImpression" name="TImpression">
                            <option value="eco">Eco</option>
                            <option value="gras">Gras</option>
                        </select><br><br>

                        <label for="DateTime">Date et Heure :</label>
                        <input type="datetime-local" id="DateTime" name="DateTime" required><br><br>

                        <label for="pdfFile">Fichier PDF:</label>
                        <input type="file" id="pdfFile" name="pdfFile" accept=".rar" required><br><br>

                        <input type="submit" value="Soumettre la Commande">
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
