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
        <h1>Profile Customers</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $customers->nik }}</h5>
                <p class="card-text">Nik: {{ $customers->nik }}</p>
                <p class="card-text">Nama Customer: {{ $customers->nama_customer }}</p>
                <p class="card-text">Email: {{ $customers->email }}</p>
                <p class="card-text">Country: {{ $customers->country }}</p>
            </div>
        </div><br>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>