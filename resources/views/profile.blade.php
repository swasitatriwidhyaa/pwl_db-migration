<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://i.pinimg.com/736x/89/34/e2/8934e2f44353835f33a80c77dd404234.jpg'); /* cream aesthetic */
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 20px;
    }
    .profile-card {
      background: rgba(143, 120, 76, 0.66);
      backdrop-filter: blur(12px);
      border-radius: 25px;
      padding: 40px 30px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.25);
      width: 30rem;       /* lebih besar */
      max-width: 95%;     /* responsif di layar kecil */
    }
    .profile img {
      width: 170px;
      height: 170px;
      object-fit: cover;
      border-radius: 50%;
      border: 0px solid white;
      box-shadow: 0 6px 15px rgba(0,0,0,0.35);
      margin-bottom: 25px;
    }
    .info-box {
      border-radius: 18px;
      padding: 20px;
      font-weight: bold;
      font-size: 1.35rem;
      color: white;
      text-align: center;
    }
    .nama { background: #261501; }
    .kelas { background: #261501; color: white; }
    .npm { background: #261501; }
  </style>
</head>
<body>
  <div class="profile-card text-center">
    <!-- Foto Profil -->
    <div class="profile">
      <img src="{{ asset('profile.jpg') }}" alt="Foto Profil">
    </div>

    <!-- Data -->
    <div class="d-grid gap-3">
      <div class="info-box nama">Nama: Swasita Tri Widhya Anggita C.</div>
      <div class="info-box kelas">Kelas: B</div>
      <div class="info-box npm">NPM: 2317051018</div>
    </div>
  </div>
</body>
</html>