@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Input Data Customer</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                </div>
                <div class="form-group mb-3">
                    <label>No. Telp</label>
                    <input type="text" name="nomor_telpon" class="form-control" placeholder="0812..." required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection