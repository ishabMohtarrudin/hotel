@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Data Kamar</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Data Kamar</a></div>
        <div class="breadcrumb-item">Tambah Kamar</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kamar.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="customer_id">Customer ID:</label>
                        <input type="text" class="form-control" id="customer_id" name="customer_id" required>
                        @error('customer_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kamar">Jenis Kamar:</label>
                        <select class="form-control" id="jenis_kamar" name="jenis_kamar" required>
                            <option value="">Pilih Jenis Kamar</option>
                            <option value="deluxe">deluxe</option>
                            <option value="superior">superior</option>
                            <option value="president">president</option>
                        </select>
                        @error('jenis_kamar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ukuran_kamar">Ukuran Kamar:</label>
                        <input type="number" class="form-control" id="ukuran_kamar" name="ukuran_kamar" required>
                        @error('ukuran_kamar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga:</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                        @error('harga')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
