@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data User</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role ?? 'ADMIN' }}</td>
                            <td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">
                                            Hapus
                                        </button>
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