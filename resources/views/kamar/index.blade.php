@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kamar.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Jenis Kamar</th>
                                <th scope="col">Ukuran Kamar</th>
                                <th scope="col">Harga Kamar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kamar as $key => $pgn)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pgn->id_kamar }}</td>
                                    <td>{{ $pgn->nama_kamar }}</td>
                                    <td>{{ $pgn->jenis_kamar }}</td>
                                    <td>{{ $pgn->ukuran_kamar }}</td>
                                    <td>{{ $pgn->harga }}</td>
                                    <td> 
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kamar.destroy', $pgn->id) }}" method="POST">
                                            <a href="{{ route('kamar.show', $pgn->id) }}" class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('kamar.edit', $pgn->id) }}" class="btn btn-warning btn-sm">Update</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data Kamar Belum Ada.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
