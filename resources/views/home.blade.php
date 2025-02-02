<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinNow - Belajar Coding & Animasi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            padding: 150px 50px 100px;
            text-align: center;
            color: white;
        }

        .badge {
            background: rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
        }

        .hero h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .cta-button {
            background: #ffd700;
            color: #333;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: transform 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }
            
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <h2>alhazein academy</h2>
        </div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#kursus">Kursus</a>
            <a href="#event">Event</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#artikel">Artikel</a>
            <a href="#dashboard">Dashboard</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="badge">RELAS RODING GRATIS</div>
        <h3>Untuk Anak Usia s-17 Tahun</h3>
        <h1>COINNOW</h1>
        <h2>Tempat Belajar Coding & Animasi Terbaik #1</h2>
        <p>Yuk Belajar Coding dan Animasi Bareng<br>dengan metode belajar online, offline</p>
        <a href="#daftar" class="cta-button">Data</a>
    </section>
</body>
</html>