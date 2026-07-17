@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>

                <div class="form-group mb-3">
                    <label>Password (Kosongkan jika tidak ingin ganti)</label>
                    <input type="password" name="password" class="form-control" placeholder="******">
                </div>

                <div class="form-group mb-3">
                    <label>Roles</label>
                    <select name="role" class="form-control" required>
                        <option value="ADMIN" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                        <option value="STAFF" {{ $user->role == 'STAFF' ? 'selected' : '' }}>STAFF</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-warning">Update User</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection