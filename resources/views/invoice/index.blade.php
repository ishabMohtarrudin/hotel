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
                <a href="{{ route('invoice.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Besar Dp</th>
                            <th scope="col">id reservasi</th>
                            <th scope="col" style="width: 20%">ACTIONS</th>
                        </tr>
                        @forelse ($datainvoice as $index => $data_datainvoice)
                        <tr>
                            <td class="text-center">{{ ++$index }}</td>
                            <td>{{ $data_datainvoice->Deskripsi }}</td>
                            <td>{{ $data_datainvoice->status }}</td>
                            <td>{{ $data_datainvoice->besar_dp }}</td>
                            <td>{{ $data_datainvoice->id_reservasi }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('invoice.destroy', $data_datainvoice->id) }}" method="POST">
                                    <a href="{{ route('invoice.show', $data_datainvoice->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('invoice.edit', $data_datainvoice->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data User Belum Ada.
                        </div>
                        @endforelse
                    </table>
                    {{-- {{ $datainvoice->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
