@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Input Data User</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group mb-3">
                    <label>Roles</label>
                    <select name="role" class="form-control">
                        <option value="">Pilihan</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection