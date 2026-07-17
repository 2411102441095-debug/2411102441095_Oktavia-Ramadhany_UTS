@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Customer</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT') 

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Nomor Telpon</label>
                    <input type="text" name="nomor_telpon" class="form-control" value="{{ $customer->nomor_telpon }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required>{{ $customer->alamat }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection