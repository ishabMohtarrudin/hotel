@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Member</h1>
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
                <a href="{{ route('hargahariini.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id hotel</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Available Room</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hargahariini as $index => $data_hargahariini)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_hargahariini->id_hotel }}</td>
                                <td>{{ $data_hargahariini->harga }}</td>
                                <td>{{ $data_hargahariini->available_room }}</td>
                                <td>{{ $data_hargahariini->tanggal }}</td>
                                <td>{{ $data_hargahariini->id_kamar }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('hargahariini.destroy', $data_hargahariini->id) }}" method="POST">
                                        <a href="{{ route('hargahariini.show', $data_hargahariini->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('hargahariini.edit', $data_hargahariini->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center alert alert-danger">Data User Belum Ada.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $hargahariini->links() }} --}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
