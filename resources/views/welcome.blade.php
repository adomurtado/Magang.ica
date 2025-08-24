<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cikara Studio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <style>
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #0C1D34;
      color: white;
    }
    .btn-gradient {
      background: linear-gradient(90deg, #F2C94C, #F2994A);
      color: black;
      font-weight: bold;
      border-radius: 9999px;
      padding: 0.5rem 1.5rem;
      text-decoration: none;
      display: inline-block;
      transition: 0.3s ease;
    }
    .btn-gradient:hover { opacity: 0.8; }
    .btn-nav {
      background: #FFD366;
      color: black !important;
      font-weight: bold;
      border-radius: 6px;
      padding: 8px 16px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-4 px-5 bg-[#0C1D34] fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold flex items-center gap-2" href="#">
      <img src="logo.png" alt="Logo" class="h-10">
      <div>
        <div class="text-lg font-bold">Cikara Studio</div>
        <div class="text-xs">Games & Apps Developers</div>
      </div>
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto gap-3">
        <li><a class="nav-link text-white hover:text-yellow-400" href="#beranda">Beranda</a></li>
        <li><a class="nav-link text-white hover:text-yellow-400" href="#visi">Program</a></li>
        <li><a class="nav-link text-white hover:text-yellow-400" href="#galeri">Galeri</a></li>
        <li><a class="nav-link text-white hover:text-yellow-400" href="#showcase">Showcase</a></li>
        <li><a class="btn-nav" href="#pendaftaran">Pendaftaran</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section id="beranda" class="min-h-screen flex flex-col lg:flex-row items-center justify-between px-16 pt-28 gap-10">
  <div>
    <h1 class="text-5xl font-bold leading-tight mb-4">
      Halo Selamat<br>Datang Di Dunia<br>Petualangan<br>Cikara
    </h1>
    <p class="mb-6">Cikara Studio</p>
    <a href="#pendaftaran" class="btn-gradient">DAFTAR</a>
  </div>
  <div>
    <img src="hero.jpg" alt="Hero" class="rounded-xl w-80">
  </div>
</section>

<!-- Visi & Misi -->
<section id="visi" class="px-16 py-20 bg-[#102544]">
  <h2 class="text-yellow-400 text-center text-2xl font-bold mb-6">VISI & MISI CIKARA STUDIO</h2>

  <!-- Visi -->
  <div class="mb-8">
    <h3 class="text-pink-400 font-bold mb-2">💕 Visi Cikara Studio</h3>
    <p>Menjadi perusahaan teknologi kreatif terdepan yang menghasilkan solusi digital berkualitas melalui aplikasi, web, game, dan desain, serta menjadi ruang tumbuh dan kolaborasi bagi generasi pembelajar dan pelaku industri kreatif.</p>
  </div>

  <!-- Misi -->
  <div class="mb-12">
    <h3 class="text-pink-400 font-bold mb-2">📌 Misi Cikara Studio</h3>
    <ul class="list-disc pl-6 space-y-1">
      <li>Mengembangkan produk digital yang inovatif dan berdampak di berbagai sektor.</li>
      <li>Menciptakan ekosistem pembelajaran yang digital dan kolaboratif.</li>
      <li>Memberdayakan sumber daya manusia melalui mentoring, pelatihan, dan sistem pembelajaran.</li>
      <li>Menumbuhkan jejaring komunitas digital demi membangun IP lokal yang kuat.</li>
      <li>Mewujudkan pertumbuhan keberlanjutan melalui kolaborasi lintas bidang.</li>
    </ul>
  </div>

  <!-- Program Bajak Laut -->
  <div class="grid lg:grid-cols-2 gap-10 items-center">
    <div>
      <h3 class="text-2xl font-bold mb-4">PROGRAM PETUALANGAN MAGANG</h3>
      <h4 class="text-yellow-300 font-bold mb-2">Sistem Magang di Cikara Studio</h4>
      <p>Cikara Studio mengembangkan program magang berbasis project sehingga peserta dapat langsung beradaptasi dan terlibat dalam ekosistem studio yang profesional.</p>

      <h4 class="mt-4 font-bold">Alur Magang</h4>
      <ol class="list-decimal pl-6 space-y-1">
        <li>Pendaftaran & Seleksi Awal</li>
        <li>Wawancara</li>
        <li>Penempatan posisi sesuai kemampuan</li>
        <li>Onboarding & Pembekalan</li>
        <li>Pelaksanaan magang</li>
        <li>Evaluasi & Sertifikasi</li>
      </ol>
    </div>
    <div class="flex justify-center">
      <img src="bajaklaut.png" alt="Bajak Laut" class="w-64">
    </div>
  </div>
</section>

<!-- Galeri -->
<section id="galeri" class="px-16 py-20">
  <h2 class="text-3xl font-bold mb-4">Galeri</h2>
  <p>Isi galeri...</p>
</section>

<!-- Showcase -->
<section id="showcase" class="px-16 py-20 bg-[#102544]">
  <h2 class="text-3xl font-bold mb-4">Showcase</h2>
  <p>Isi showcase...</p>
</section>

<!-- Pendaftaran -->
<section id="pendaftaran" class="px-16 py-20">
  <h2 class="text-3xl font-bold mb-4">Pendaftaran</h2>
  <form class="max-w-lg">
    <input type="text" placeholder="Nama" class="form-control mb-3">
    <input type="email" placeholder="Email" class="form-control mb-3">
    <textarea placeholder="Pesan" class="form-control mb-3"></textarea>
    <button class="btn-gradient">Kirim</button>
  </form>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
