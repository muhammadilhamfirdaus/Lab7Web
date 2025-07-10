<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Admin Portal'; ?></title>

    <!-- Google Fonts & Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

    <style>
        :root {
            --primary-dark: #1f2d3d;
            --secondary-dark: #2e3c4f;
            --accent: #1abc9c;
            --navbar-bg: #263849;
            --text-light: #ecf0f1;
            --text-muted: #bdc3c7;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--primary-dark);
            margin: 0;
            padding: 0;
            color: var(--text-light);
        }

        .header {
            padding: 50px 20px;
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            background: linear-gradient(135deg, #2c3e50, #34495e);
            border-bottom: 4px solid var(--accent);
            color: var(--text-light);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar {
            display: flex;
            justify-content: center;
            gap: 20px;
            background-color: var(--navbar-bg);
            padding: 14px 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: var(--text-light);
            font-weight: 600;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .navbar a:hover,
        .navbar a.active {
            background-color: var(--accent);
            color: #fff;
        }

        .container {
            max-width: 1500px;
            margin: 40px auto;
            background: var(--secondary-dark);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            font-size: 26px;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent);
            padding-bottom: 10px;
        }

        .container p {
            font-size: 16px;
            color: var(--text-muted);
        }

        footer {
            background: var(--navbar-bg);
            color: var(--text-muted);
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
            margin-top: 60px;
            border-top: 4px solid var(--accent);
        }

        .article-list {
            padding: 30px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card-article {
            background-color: #2e3c4f;
            color: #ecf0f1;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 25px;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .card-article:hover {
            transform: translateY(-5px);
        }

        .entry-header h2 {
            font-size: 1.6em;
            margin-bottom: 10px;
        }

        .entry-header h2 a {
            color: #1abc9c;
            text-decoration: none;
            transition: color 0.3s;
        }

        .entry-header h2 a:hover {
            color: #16a085;
        }

        .kategori {
            font-size: 0.9em;
            color: #bdc3c7;
        }

        .entry-image img {
            max-width: 100%;
            height: auto;
            margin: 15px 0;
            border-radius: 8px;
            border: 1px solid #444;
        }

        .entry-content p {
            color: #dcdcdc;
            margin-bottom: 10px;
        }

        .read-more {
            display: inline-block;
            background-color: #1abc9c;
            color: #fff;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .read-more:hover {
            background-color: #16a085;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .container {
                margin: 20px 10px;
                padding: 30px 20px;
            }

            .header {
                font-size: 28px;
                padding: 30px 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        📰 Admin Portal Berita
    </div>

    <!-- Navigation -->
    <?php
        $uri = service('uri');
        $segment2 = $uri->getSegment(2);
        $segment3 = $uri->getSegment(3);
    ?>
   <nav class="navbar">
    <a href="<?= base_url('/admin/dashboard'); ?>" 
       class="<?= ($segment2 == 'dashboard') ? 'active' : ''; ?>">
        Dashboard
    </a>

    <a href="<?= base_url('/admin/artikel'); ?>" 
       class="<?= ($segment2 == 'artikel' && !$segment3) ? 'active' : ''; ?>">
        Artikel
    </a>

    <a href="<?= base_url('/admin/artikel/add'); ?>" 
       class="<?= ($segment2 == 'artikel' && $segment3 == 'add') ? 'active' : ''; ?>">
        Tambah Artikel
    </a>
</nav>


    <!-- Content -->
    <main class="container">
        <h2>Selamat Datang di Dashboard Admin</h2>
        <p>Kelola semua konten artikel berita dari satu tempat dengan tampilan yang bersih dan profesional.</p>
        <?= $this->renderSection('content') ?>
    </main>

</body>

</html>
