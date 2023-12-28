<!-- resources/views/emails/devis.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        strong {
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Devis</h1>

    <table>
        <tr>
            <th>Item</th>
            <th>Information</th>
        </tr>
        <tr>
            <td><strong>Professeur:</strong></td>
            <td>{{ $professeur }}</td>
        </tr>
        <tr>
            <td><strong>Type d'Impression:</strong></td>
            <td>{{ $impression_type }}</td>
        </tr>
        <tr>
            <td><strong>Filière:</strong></td>
            <td>{{ $filiere }}</td>
        </tr>
        <tr>
            <td><strong>Nombre de Copies:</strong></td>
            <td>{{ $ncopies }}</td>
        </tr>
        <tr>
            <td><strong>Format:</strong></td>
            <td>{{ $format }}</td>
        </tr>
        <tr>
            <td><strong>R Recto/Verso:</strong></td>
            <td>{{ $print_type }}</td>
        </tr>
        <tr>
            <td><strong>Couleur:</strong></td>
            <td>{{ $color }}</td>
        </tr>
        <tr>
            <td><strong>Style d'Impression:</strong></td>
            <td>{{ $print_style }}</td>
        </tr>
        <tr>
            <td><strong>Date:</strong></td>
            <td>{{ $datetime }}</td>
        </tr>
    </table>

    <p>Merci d'utiliser notre plateforme!</p>

</body>
</html>
