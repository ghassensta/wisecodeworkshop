<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    img {
        max-width: 100%;
        height: auto;
    }
    p {
        font-family: cursive;
    }
    h1 {
        font-family: serif;
    }
    h2 {
        font-family: monospace;
    }
    h3 {
        font-family: fantasy;
    }
    h4 {
        font-family: 'Courier New', Courier, monospace;
    }
    h5 {
        font-family: 'Arial', sans-serif;
    }
    h6 {
        font-family: 'Times New Roman', Times, serif;
    }
</style>
<body>

    @foreach ($produitexemple1 as $wisecode)
    <table>
        <tr>
            <td style="color:red; font-family:cursive;">{{ $wisecode->nom }}</td>
            <td>{{ $wisecode->prix }}DT</td>
            <td>{{ $wisecode->quantiteEnStock }}G</td>
{{--           <td><img src="{{ asset('storage/'.$produit->image) }}" alt="Image Produit" width="100" height="100"></td>
 --}}        </tr>
        </tr>
    </table>
@endforeach

</body>
</html>
