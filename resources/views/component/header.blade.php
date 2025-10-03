<!-- resources/views/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green-custom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="fw-bold text-white">Sistem Pendaftaran Pengguna</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Navbar warna hijau muda */
.bg-green-custom {
    background-color: #4a5ed7 !important; /* hijau muda (green-400) */
}

/* Teks brand putih polos */
.navbar-brand span {
    color: #ffffff !important;
}
</style>
