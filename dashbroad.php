<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cricket Dashboard</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        /* HEADER */
        .header {
            background: #2d3748;
            color: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
            font-size: 20px;
        }

        .logout {
            background: #e53e3e;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .logout:hover {
            background: #c53030;
        }

        /* WELCOME */
        .welcome {
            padding: 20px 30px 0;
            font-size: 18px;
            color: #333;
        }

        /* SLIDER */
        .swiper {
            width: 90%;
            height: 450px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .swiper-slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        /* CARDS */
        .container {
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .card a {
            text-decoration: none;
            color: #2d3748;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- HEADER   auth/logout.php-->
<div class="header">
    <h2>🏏 Cricket Star Dashboard</h2>
    <a class="logout" href="http://localhost/Anil_project/login.php">Logout</a>
</div>
  
<!-- WELCOME -->
<div class="welcome">
    Welcome, <b><?php echo $_SESSION['user']; ?></b>
</div>
<div class="container">

    <div class="card">
        <a href="players/list.php">🏏 Players</a>
    </div>

    <div class="card">
        <a href="rankings/list.php">📊 Rankings</a>
    </div>

    <div class="card">
        <a href="news/list.php">📰 News</a>
    </div>

    <div class="card">
        <a href="profiles/list.php">👤 Profiles</a>
    </div>

</div>

<!-- SLIDER -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1540747913346-19e32dc3e97e" />
        </div>

        <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1593766827228-8737b4534aa5" />
        </div>

        <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1508344928928-7165b67de128" />
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- MENU CARDS -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>

</body>
</html>