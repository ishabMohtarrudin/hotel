@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Customers</h1>
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
                <a href="{{ route('customers.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer id</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Email</th>
                            <th scope="col">Country</th>
                            <th scope="col" style="width: 20%">ACTIONS</th>
                        </tr>
                        @forelse ($customers as $index => $data_customers)
                        <tr>
                            <td class="text-center">{{ ++$index }}</td>
                            <td>{{ $data_customers->customer_id }}</td>
                            <td>{{ $data_customers->nik }}</td>
                            <td>{{ $data_customers->nama_customer }}</td>
                            <td>{{ $data_customers->email }}</td>
                            <td>{{ $data_customers->country }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $data_customers->id) }}" method="POST">
                                    <a href="{{ route('customers.show', $data_customers->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('customers.edit', $data_customers->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                    {{-- {{ $customers->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
