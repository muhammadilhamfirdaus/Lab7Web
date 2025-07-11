<?= $this->include('template/header'); ?>
<style>
    :root {
        --dark-bg: #0e1a2b;
        --card-bg: #1c2a3a;
        --primary: #00ffcc;
        --secondary: #00b386;
        --text-color: #f0f0f0;
        --muted: #cfcfcf;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        background-color: var(--dark-bg);
        color: var(--text-color);
    }

    header {
        background: linear-gradient(to right, #006666, #009999);
        padding: 2rem 1rem;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    header h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #fff;
        text-shadow: 1px 1px 4px #000;
    }

    header p {
        font-size: 1.1rem;
        color: #e0fdf6;
        margin-top: 0.5rem;
    }

    main {
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .article {
        background-color: var(--card-bg);
        border-left: 4px solid var(--primary);
        border-radius: 10px;
        padding: 1.5rem 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 0 10px rgba(0, 255, 204, 0.1);
        transition: transform 0.2s ease;
    }

    .article:hover {
        transform: translateY(-3px);
    }

    .article h2 {
        color: var(--primary);
        margin-bottom: 0.5rem;
    }

    .article p {
        color: var(--muted);
        line-height: 1.6;
    }

    footer {
        text-align: center;
        color: var(--muted);
        padding: 1rem 0;
        margin-top: 3rem;
        font-size: 0.9rem;
        background-color: #0b1522;
        border-top: 1px solid #1e2b3c;
    }

    @media (max-width: 768px) {
        header h1 {
            font-size: 2rem;
        }

        .article {
            padding: 1.2rem 1.5rem;
        }
    }
</style>
</head>

<body>

    <header>
        <h1>WEB PORTAL ARTIKEL</h1>
        <p>Membaca, Menulis, dan Menyebarkan Pengetahuan</p>
    </header>

    <main>
        <div class="article">
            <h2>Apa Itu Web Portal Artikel?</h2>
            <p>Web Portal Artikel adalah platform online yang menyajikan berbagai tulisan informatif, edukatif, dan
                inspiratif dari berbagai topik seperti teknologi, kesehatan, gaya hidup, bisnis, dan lainnya. Tujuan
                utamanya adalah memberikan akses cepat terhadap informasi berkualitas.</p>
        </div>

        <div class="article">
            <h2>Fitur Unggulan Portal Ini</h2>
            <p>
                - Artikel terbaru selalu update<br>
                - Tampilan minimalis dan responsif<br>
                - Kategori yang terorganisir rapi<br>
                - Navigasi mudah dan cepat<br>
                - Sistem penulisan artikel ramah pengguna
            </p>
        </div>

        <div class="article">
            <h2>Manfaat Menggunakan Portal Artikel</h2>
            <p>Dengan membaca artikel di portal ini, pengunjung dapat memperluas wawasan, menemukan inspirasi, dan tetap
                mengikuti perkembangan informasi terkini. Cocok untuk pelajar, profesional, hingga penulis lepas yang
                ingin berbagi karya tulisannya.</p>
        </div>
    </main>

    <?= $this->include('template/footer'); ?>