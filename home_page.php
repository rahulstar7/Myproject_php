<!DOCTYPE html>
<html>
<head>
    <title>Cricket Star</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            width: 100%;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(12px);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            z-index: 1000;
        }

        .navbar h2 {
            color: #fff;
        }

        .nav-links a {
            color: #fff;
            margin-left: 25px;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ffd700;
        }

        /* Slider (Fade Effect) */
        .slider {
            height: 100vh;
            position: relative;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            animation: fade 12s infinite;
        }

        .slide:nth-child(1) { animation-delay: 0s; }
        .slide:nth-child(2) { animation-delay: 4s; }
        .slide:nth-child(3) { animation-delay: 8s; }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @keyframes fade {
            0% { opacity: 0; }
            10% { opacity: 1; }
            30% { opacity: 1; }
            40% { opacity: 0; }
            100% { opacity: 0; }
        }

        /* Overlay */
        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            animation: zoomIn 2s ease;
        }

        .overlay h1 {
            font-size: 55px;
        }

        .overlay p {
            margin: 10px 0;
            font-size: 20px;
        }

        .btn {
            padding: 12px 30px;
            background: #ffd700;
            border-radius: 30px;
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: 0.4s;
        }

        .btn:hover {
            background: red;
            transform: scale(1.1);
        }

        @keyframes zoomIn {
            from { transform: translate(-50%, -60%) scale(0.8); opacity: 0; }
            to { transform: translate(-50%, -50%) scale(1); opacity: 1; }
        }

        /* Features */
        .section {
            padding: 80px 20px;
            text-align: center;
            background: linear-gradient(135deg, #eef2f3, #dfe9f3);
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card {
            width: 260px;
            padding: 30px;
            border-radius: 20px;
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: 0.4s;
        }

        .card:hover {
            transform: translateY(-15px) scale(1.05);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        /* Footer */
        .footer {
            background: #111;
            color: white;
            padding: 20px;
            text-align: center;
        }

    </style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
    <h2>🏏 Cricket Star</h2>
    <div class="nav-links">
        <a href="http://localhost/Anil_project/home_page.php">Home</a>
        <a href="http://localhost/Anil_project/login.php">Login</a>
                <a href="http://localhost/Anil_project/player_create.php">Players_Reg</a>
		<a href="http://localhost/Anil_project/register_home.php">Register</a>
    </div>
</div>

<!-- Slider -->
<div class="slider">
<div class="slide"><img src="http://localhost/Anil_project/source/a.avif"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/b.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/c.webp"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/d.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/e.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/f.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/g.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/h.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/i.jpg"></div>
<div class="slide"><img src="http://localhost/Anil_project/source/l.jpg"></div>

    <div class="overlay">
        <h1>Cricket Star</h1>
        <p>Play. Track. Enjoy Cricket</p>
        <a href="register.php" class="btn">Get Started</a>
    </div>
</div>

<!-- Features -->
<div class="section">
    <h2>Our Features</h2>

    <div class="cards">
        <div class="card">
            <h3>🏏 Live Score</h3>
            <p>Real-time updates</p>
			<a href="https://www.cricbuzz.com/">click Now</a>
        </div>

        <div class="card">
            <h3>📊 Stats</h3>
            <p>Detailed analytics</p>
			<a href="http://localhost/Anil_project/analytics.php">click Now</a>
        </div>

        <div class="card">
            <h3>⭐ Players</h3>
            <p>Top cricket stars</p>
			  
			<a href="http://localhost/Anil_project/top_players.php">click Now</a>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    © 2026 Cricket Star
</div>

</body>
</html>