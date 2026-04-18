<!DOCTYPE html>
<html>
<head>
    <title>Cricket Analytics Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
        }

        header {
            text-align: center;
            padding: 25px;
            font-size: 28px;
            font-weight: bold;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.4);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin: 10px 0;
            font-size: 30px;
        }

        .players {
            padding: 20px;
        }

        .players h2 {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255,255,255,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background: #00c6ff;
            color: black;
        }

        tr:nth-child(even) {
            background: rgba(255,255,255,0.05);
        }

    </style>
</head>
<body>

<header>🏏 Cricket Analytics Dashboard</header>

<!-- TOP STATS -->
<div class="dashboard">

    <div class="card">
        <h3>Total Matches</h3>
        <h2>1200+</h2>
    </div>

    <div class="card">
        <h3>Total Runs</h3>
        <h2>5,00,000+</h2>
    </div>

    <div class="card">
        <h3>Total Wickets</h3>
        <h2>15,000+</h2>
    </div>

    <div class="card">
        <h3>Top Strike Rate</h3>
        <h2>AB de Villiers</h2>
    </div>

</div>

<!-- PLAYER ANALYTICS -->
<div class="players">
    <h2>📊 Top Player Statistics</h2>

    <table border="1">
        <tr>
            <th>Player</th>
            <th>Country</th>
            <th>Runs</th>
            <th>Average</th>
            <th>Strike Rate</th>
        </tr>

        <tr>
            <td>Virat Kohli</td>
            <td>India</td>
            <td>25000+</td>
            <td>57.5</td>
            <td>93.2</td>
        </tr>

        <tr>
            <td>Babar Azam</td>
            <td>Pakistan</td>
            <td>12000+</td>
            <td>55.4</td>
            <td>89.1</td>
        </tr>

        <tr>
            <td>Joe Root</td>
            <td>England</td>
            <td>15000+</td>
            <td>50.2</td>
            <td>87.0</td>
        </tr>

        <tr>
            <td>Steve Smith</td>
            <td>Australia</td>
            <td>14000+</td>
            <td>59.3</td>
            <td>86.5</td>
        </tr>

        <tr>
            <td>Kane Williamson</td>
            <td>New Zealand</td>
            <td>13000+</td>
            <td>52.8</td>
            <td>82.4</td>
        </tr>

    </table>
</div>

</body>
</html>