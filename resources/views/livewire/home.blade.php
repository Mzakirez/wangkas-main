<div>
  {{-- 1. NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">
        <i class="bi bi-mortarboard-fill me-2"></i>SMK HEBAT
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="#info">Tentang Sekolah</a></li>
          <li class="nav-item"><a class="nav-link" href="#programs">Program</a></li>
          <li class="nav-item"><a class="nav-link" href="#majors">Jurusan</a></li>
          <li class="nav-item ms-lg-3">
            <a href="{{ route('login') }}" class="btn btn-primary px-4 rounded-pill">Masuk / Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- 2. HERO SECTION (Selamat Datang) --}}
  <section class="d-flex align-items-center justify-content-center text-center bg-primary text-white"
    style="min-height: 80vh; padding-top: 80px; background: linear-gradient(135deg, #435ebe 0%, #25396f 100%);">
    <div class="container">
      <h1 class="display-3 fw-bold mb-3">Selamat Datang di SMK Hebat</h1>
      <p class="lead mb-4 px-md-5 mx-md-5">
        Membentuk Generasi Cerdas, Berkarakter, dan Siap Kerja.
        Platform Pendidikan Terintegrasi untuk Masa Depan yang Lebih Baik.
      </p>
      <a href="#info" class="btn btn-light btn-lg rounded-pill px-5 text-primary fw-bold">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  {{-- 3. SECTION 1: INFORMASI SEKOLAH --}}
  <section id="info" class="py-5 bg-white">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          {{-- Placeholder Image --}}
          <img src="https://via.placeholder.com/600x400?text=Gedung+Sekolah" alt="Sekolah"
            class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6 ps-lg-5">
          <h6 class="text-primary fw-bold text-uppercase ls-md">Tentang Kami</h6>
          <h2 class="fw-bold mb-4">Mewujudkan Pendidikan Berkualitas</h2>
          <p class="text-muted mb-4">
            SMK Hebat berkomitmen menyediakan lingkungan belajar yang kondusif dengan fasilitas modern.
            Kami fokus pada pengembangan soft skills dan hard skills siswa agar siap menghadapi tantangan
            dunia industri maupun melanjutkan ke jenjang pendidikan tinggi.
          </p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fasilitas Lengkap & Modern</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Pengajar Berkompeten</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Ekstrakurikuler Beragam</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{-- 4. SECTION 2: PROGRAM SEKOLAH (Unggulan & Reguler) --}}
  <section id="programs" class="py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Program Pendidikan</h2>
        <p class="text-muted">Pilihan program yang sesuai dengan kebutuhan dan target siswa.</p>
      </div>

      <div class="row justify-content-center">
        @forelse($programs as $program)
          <div class="col-md-6 col-lg-5 mb-4">
            <div class="card h-100 border-0 shadow-sm hover-card transition-all">
              <div class="card-body p-5 text-center">
                <div class="icon-box mb-4 text-primary">
                  <i class="bi bi-stars display-4"></i>
                </div>
                <h3 class="fw-bold mb-3">{{ $program->name }}</h3>
                <p class="text-muted mb-4">
                  Program pendidikan {{ strtolower($program->name) }} dengan kurikulum terpadu
                  untuk memaksimalkan potensi siswa.
                </p>
                <h4 class="text-primary fw-bold mb-0">
                  Rp {{ number_format($program->fee, 0, ',', '.') }}
                </h4>
                <small class="text-muted">Biaya SPP / Bulan</small>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>Data program belum tersedia.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  {{-- 5. SECTION 3: JURUSAN (IPA & IPS) --}}
  <section id="majors" class="py-5 bg-white">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Jurusan Tersedia</h2>
        <p class="text-muted">Fokus keahlian untuk masa depan karir Anda.</p>
      </div>

      <div class="row g-4">
        @forelse($majors as $major)
          <div class="col-md-6 col-lg-6">
            <div class="card h-100 border overflow-hidden shadow-sm">
              <div class="row g-0 h-100">
                <div class="col-4 bg-primary d-flex align-items-center justify-content-center text-white">
                  {{-- Menampilkan singkatan, misal IPA / IPS --}}
                  <h2 class="fw-bold mb-0">{{ $major->abbreviation }}</h2>
                </div>
                <div class="col-8">
                  <div class="card-body d-flex flex-column justify-content-center h-100">
                    <h5 class="card-title fw-bold">{{ $major->name }}</h5>
                    <p class="card-text text-muted small">
                      Mempelajari bidang keilmuan {{ strtolower($major->name) }}
                      dengan praktik dan teori yang seimbang.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>Data jurusan belum tersedia.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  {{-- FOOTER --}}
  <footer class="bg-dark text-white py-4 text-center">
    <div class="container">
      <p class="mb-0">&copy; {{ date('Y') }} SMK Hebat. All Rights Reserved.</p>
    </div>
  </footer>
</div>
