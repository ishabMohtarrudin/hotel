@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Data Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Data Invoice</a></div>
        <div class="breadcrumb-item">Tambah Data Invoice</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('invoice.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required>
                        @error('deskripsi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status Invoice:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="bayar" {{ old('status') == 'bayar' ? 'selected' : '' }}>Bayar</option>
                            <option value="dp" {{ old('status') == 'dp' ? 'selected' : '' }}>DP</option>
                            <option value="lunas" {{ old('status') == 'lunas' ? 'selected' : '' }}>Lunas</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="besar_dp">Besar Dp:</label>
                        <input type="integer" class="form-control" id="besar_dp" name="besar_dp" value="{{ old('besar_dp') }}" required>
                        @error('besar_dp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_reservasi">Reservasi:</label>
                        <select class="form-control" id="id_reservasi" name="id_reservasi" required>
                            <option value="">Pilih Reservasi</option>
                            @foreach ($reservasi as $id_reservasi)
                                <option value="{{ $data_reservasi->id }}" {{ old('id_reservasi') == $data_reservasi->id ? 'selected' : '' }}>
                                    {{ $data_reservasi->nama_reservasi }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_reservasi')
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
