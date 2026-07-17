@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Costumer</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No.Telp</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->nama }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->nomor_telpon }}</td>
                            <td>{{ $customer->alamat }}</td>
                            <td>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                        </form>
                                   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection