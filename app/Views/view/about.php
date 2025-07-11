<?= $this->include('template/header'); ?>

<style>
  body {
    background: #0f172a;
    color: #f1f5f9;
    font-family: 'Inter', sans-serif;
  }

  .about-section {
    padding: 6rem 1rem 4rem;
  }

  .profile-img {
    max-width: 220px;
    border-radius: 1rem;
    position: relative;
    z-index: 2;
  }

  .glow-wrapper {
    position: relative;
    display: inline-block;
  }

  .glow-wrapper::before {
    content: '';
    position: absolute;
    inset: -25px;
    background: radial-gradient(circle, #91e3d3 0%, rgba(145, 227, 211, 0) 70%);
    filter: blur(70px);
    z-index: 1;
  }

  .arrow {
    position: absolute;
    top: -63px;       /* sejajar dengan teks "Hello!" */
    left: 210px;     /* sesuaikan jika perlu */
    width: 130px;
    transform: rotate(-5deg);
    opacity: 0.9;
    z-index: 5;
  }

  .lead-title {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.3;
    color: #ffffff;
  }

  .highlight {
    color: #91e3d3;
  }

  .tagline-small {
    opacity: 0.7;
    font-size: 1rem;
  }

  .job-title {
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 2rem;
  }

  .short-desc {
    font-size: 1rem;
    opacity: 0.9;
  }

  .about-text {
    margin-top: 3rem;
    font-size: 1.05rem;
    line-height: 1.8;
    opacity: 0.95;
  }

  @media (max-width: 768px) {
    .lead-title {
      font-size: 2.2rem;
    }

    .arrow {
      display: none;
    }

    .about-section {
      text-align: center;
      padding-top: 4rem;
    }
  }
</style>

<section class="about-section container">
  <div class="row align-items-center gy-4">
    <!-- LEFT: PHOTO -->
    <div class="col-md-4 text-center position-relative">
      <div class="glow-wrapper">
        <img src="/assets/img/ilham.png" alt="M Ilham Firdaus" class="profile-img img-fluid">
      </div>
      <img src="/assets/img/Arrow.png" alt="arrow" class="arrow d-none d-md-block">
    </div>

    <!-- RIGHT: INTRO -->
    <div class="col-md-8">
      <p class="mb-1">Hello! Saya <span class="highlight fw-semibold">M Ilham Firdaus</span></p>
      <p class="tagline-small mb-2">Seorang Software Engineer yang</p>

      <h1 class="lead-title mb-3">
        Merancang <span class="highlight">solusi</span><br>
        dari akar <span class="highlight">permasalahannya...</span>
      </h1>

      <p class="tagline-small">Karena setiap baris kode harus menyelesaikan masalah nyata.</p>

      <div class="job-title mt-4">
        Software Engineer & AI Developer | Praktisi PPIC
      </div>
      <p class="short-desc mt-1">
        Saat ini, saya adalah mahasiswa Teknik Informatika di Universitas Pelita Bangsa sekaligus bekerja di PT Citra Nugerah Karya.
      </p>
    </div>
  </div>

  <!-- BIOGRAFI -->
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <p class="about-text">
        Saya adalah seorang Software Engineer dengan pengalaman nyata dalam membangun aplikasi berbasis Laravel,
        mengembangkan sistem AI untuk deteksi objek menggunakan YOLO, serta merancang chatbot dan analisis data
        melalui pemanfaatan API seperti Gemini. Terlibat langsung dalam implementasi Toyota Production System (TPS)
        dan metode Kanban di divisi PPIC, dengan pemahaman mendalam terkait penggunaan modul ERP
        (Production Planning/PP dan Materials Management/MM) guna meningkatkan efisiensi proses manufaktur berbasis data.
      </p>
    </div>
  </div>
</section>

<?= $this->include('template/footer'); ?>
