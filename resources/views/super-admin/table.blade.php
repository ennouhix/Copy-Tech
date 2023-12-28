<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
        <h2><img src="{{ asset('img/esith-copy.png') }}" alt="Logo de esith"></h2>

            <ul>
                <li><a href="dashboard"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="#"><i class="fas fa-file"></i>Creer/ajouter un professeur </a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>Listes des professeurs</a></li>
                <li><a href="table"><i class="fas fa-window-maximize"></i>listes des commandes</a></li>
                <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>
            </ul>
            <div class="social_media">
            </div>
        </div>
        <div class="main_content">
        <body>
            
    <table border="1" id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Professeur</th>
                <th>Type d'impression</th>
                <th>Filiere</th>
                <th>Date de la demande</th>
                <th>nombre de copie </th>
                <th>R  R/V</th>
                <th>Couleur</th>

                <th>Pdf path</th>
                <th>telecharger</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tableData as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->professeur }}</td>
                <td>{{ $data->impression_type }}</td>
                <td>{{ $data->filiere }}</td>
                <td>{{ $data->datetime }}</td>
                <td>{{ $data->ncopies }}</td>
                <td>{{ $data->print_type }}</td>
                <td>{{ $data->color}}</td>


                <!-- Add more table data as needed -->
                <td>{{ $data->pdf_path }}</td>
                
                

                <td>
                <a href="{{ url('/download/' . urlencode($data->pdf_path)) }}" download>download pdf</a>

   
               
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        
        let table = new DataTable('#myTable');
    </script>
    



</body>
        </body>

  

</html>
