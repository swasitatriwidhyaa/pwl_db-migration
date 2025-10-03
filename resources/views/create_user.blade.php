@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center" style="color: #4a5ed7; font-weight: bold;">Buat Pengguna Baru</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <!-- Input Nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Input NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label fw-semibold">NPM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NPM" required>
                        </div>

                        <!-- Pilih Kelas -->
                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select" required>
                                <option value="" disabled selected>Pilih Kelas</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn" style="background-color: #4a5ed7; color: white; font-weight: bold;">
                                Simpan
                            </button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
