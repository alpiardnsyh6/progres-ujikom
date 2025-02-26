@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Data Petugas Hotel Hebat</h5>

                    @if(session('info'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <hr>
                    <a href="/user/create" class="btn btn-primary mb-3">
                        <i class="icon-plus"></i> Tambah Petugas
                    </a>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="bg-dark py-3 text-light">No</th>
                                <th class="bg-dark py-3 text-light">Nama</th>
                                <th class="bg-dark py-3 text-light">Username</th>
                                <th class="bg-dark py-3 text-light">Email</th>
                                <th class="bg-dark py-3 text-light">Nomor HP</th>
                                <th class="bg-dark py-3 text-light">Level</th>
                                <th class="bg-dark py-3 text-light">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <a href="/user/edit/{{ $user->id }}" class="btn btn-sm btn-info">
                                            <i class="icon-pencil"></i> Edit
                                        </a>
                                        <a href="/user/delete/{{ $user->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin data ini akan dihapus?')">
                                            <i class="icon-trash"></i> Hapus
                                        </a>
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
