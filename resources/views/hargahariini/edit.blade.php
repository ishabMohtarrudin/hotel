@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Data Harga </h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Data Harga Hari Ini</a></div>
        <div class="breadcrumb-item">Tambah Data Harga Hari ini</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('hargahariini.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_hotel">Hotel:</label>
                        <input type="number" class="form-control" id="id_hotel" name="id_hotel" value="{{ old('id_hotel') }}" required>
                        @error('id_hotel')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="id_kamar">Kamar:</label>
                        <input type="number" class="form-control" id="id_kamar" name="id_kamar" value="{{ old('id_kamar') }}" required>
                        @error('id_kamar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga:</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
                        @error('harga')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="avalible_room">Avalible Room:</label>
                        <input type="text" class="form-control" id="avalible_room" name="avalible_room" value="{{ old('avalible_room') }}" required>
                        @error('avalible_room')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                        @error('tanggal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror       
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
