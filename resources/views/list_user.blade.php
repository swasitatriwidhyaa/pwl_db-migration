@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Judul Halaman -->
    <h1 class="mb-4 fw-bold text-center" style="color: #4a5ed7;">Daftar Pengguna</h1>

    <!-- Tombol Tambah Pengguna -->
    <div class="mb-3 text-end">
        <a href="{{ url('/user/create') }}" class="btn" style="background-color: #4a5ed7; color: white; font-weight: bold;">
            + Tambah Pengguna
        </a>
    </div>

    <!-- Card Tabel -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-bordered table-hover mb-0 text-center align-middle">
                <thead style="background-color: #4a5ed7; color: white;">
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 30%;">Nama</th>
                        <th style="width: 30%;">NIM</th>
                        <th style="width: 20%;">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user as $users)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->nama }}</td>
                            <td>{{ $users->nim }}</td>
                            <td>{{ $users->nama_kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted py-3">
                                Belum ada pengguna terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
