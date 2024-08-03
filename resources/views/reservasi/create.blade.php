@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Reservasi</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('reservasi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_reservasi">ID Reservasi:</label>
                        <input type="text" class="form-control" id="id_reservasi" name="id_reservasi" required>
                        @error('id_reservasi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer_id">Customer:</label>
                        <select class="form-control" id="customer_id" name="customer_id" required>
                            <option value="">Pilih Customer</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->customer_id }}">{{ $customer->nama_customer }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        @error('tanggal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai:</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                        @error('tanggal_mulai')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir:</label>
                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" required>
                        @error('tanggal_akhir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_hotel">Hotel:</label>
                        <select class="form-control" id="id_hotel" name="id_hotel" required>
                            <option value="">Pilih Hotel</option>
                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id_hotel }}">{{ $hotel->id_hotel }}</option>
                            @endforeach
                        </select>
                        @error('id_hotel')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
