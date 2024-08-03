<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Kamar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Kamar</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $kamar->nama_kamar }}</h5>
                <p class="card-text">Id Kamar: {{ $kamar->id_kamar }}</p>
                <p class="card-text">Nama Kamar: {{ $kamar->nama_kamar }}</p>
                <p class="card-text">Jenis Kamar: {{ $kamar->jenis_kamar }}</p>
                <p class="card-text">Ukuran Kamar: {{ $kamar->Ukuran_kamar }}</p>
                <p class="card-text">Harga: {{ $kamar->harga }}</p>
            </div>
        </div><br>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>