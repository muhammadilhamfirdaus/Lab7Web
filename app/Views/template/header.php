<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'WEB PORTAL BERITA'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1e3a8a;
            --accent-color: #10b981;
            --light-bg: #f4f7f6;
            --text-color: #2f2f2f;
            --nav-bg: #1e293b;
            --header-bg: linear-gradient(135deg, #1e3a8a, #10b981);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-bg);
            padding: 0;
        }

        #container {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        /* --- HEADER --- */
        header {
            background: var(--header-bg);
            color: white;
            padding: 40px 20px;
            text-align: center;
            position: relative;
            border-bottom: 4px solid var(--accent-color);
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
        }

        /* --- NAVIGATION --- */
        nav {
            background: var(--nav-bg);
            padding: 16px 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 6px;
            transition: 0.3s ease;
            background: transparent;
        }

        nav a:hover,
        nav a.active {
            background-color: var(--accent-color);
            color: #fff;
        }

        /* --- MAIN WRAPPER --- */
        #wrapper {
            display: flex;
            flex-wrap: wrap;
            padding: 30px;
            gap: 30px;
        }

        #main {
            flex: 3;
            min-width: 60%;
            padding: 30px;
            background: #2c3e50;
            /* Dark background */
            color: #ecf0f1;
            /* White text */
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #main a {
            color: #1abc9c;
            text-decoration: none;
        }

        #main a:hover {
            color: #16e0b0;
            text-decoration: underline;
        }

        #main h2,
        #main h3,
        #main h4 {
            color: #ffffff;
        }


        #sidebar {
            flex: 1;
            min-width: 300px;
            padding: 25px;
            background: #1e293b;
            /* Gelap kebiruan */
            color: #ecf0f1;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .widget-box {
            background: #273649;
            /* Lebih gelap */
            border: 1px solid #3e4c5e;
            border-radius: 6px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .widget-box .title {
            font-size: 1.4em;
            color: #1abc9c;
            margin-bottom: 15px;
            border-bottom: 2px solid #1abc9c;
            padding-bottom: 10px;
        }

        .widget-box ul li a {
            color: #91e3d3;
        }

        .widget-box ul li a:hover {
            color: #1abc9c;
            text-decoration: underline;
        }

        .widget-box p {
            color: #bdcbd6;
        }

        .artikel-terkini-list {
            list-style: none;
            padding-left: 0;
            margin-top: 15px;
        }

        .artikel-terkini-list li {
            margin-bottom: 10px;
            padding: 8px 12px;
            background-color: #1f2d3d;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .artikel-terkini-list li:hover {
            background-color: #273b50;
        }

        .artikel-terkini-list li a {
            color: #91e3d3;
            text-decoration: none;
            font-weight: 500;
            display: block;
            transition: color 0.3s ease;
        }

        .artikel-terkini-list li a:hover {
            color: #1abc9c;
        }



        /* --- FOOTER --- */
        footer {
            background: #1f2937;
            color: #cbd5e1;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            font-size: 0.9em;
            border-top: 3px solid var(--accent-color);
        }

        footer p {
            margin: 0;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            #wrapper {
                flex-direction: column;
            }

            nav {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                width: 100%;
                text-align: center;
            }

            #main,
            #sidebar {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <header>
            <h1>WEB PORTAL BERITA</h1>
        </header>
        <nav>
            <?php
            // Get the current URL path
            $currentPath = service('uri')->getPath();

            // Define navigation links and their paths
            $navLinks = [
                'Home' => '/',
                'Artikel' => '/artikel',
                'About' => '/about',
                'Kontak' => '/contact',
            ];

            foreach ($navLinks as $text => $path) {
                // Determine if the current link is active
                $isActive = ($currentPath === $path || ($path === '/' && $currentPath === '')); // Handles base URL and empty path for home
            
                // Special handling for '/artikel' to also be active for '/artikel/some-slug'
                if ($path === '/artikel' && strpos($currentPath, '/artikel') === 0 && $currentPath !== '/') {
                    $isActive = true;
                }
                ?>
                <a href="<?= base_url($path); ?>" class="<?= $isActive ? 'active' : ''; ?>">
                    <?= $text; ?>
                </a>
            <?php } ?>
        </nav>
        <section id="wrapper">
            <section id="main">