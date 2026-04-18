<?php
include('connection.php');

$message = "";

if ($_POST) {

    $name = $_POST['name'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    $sql = "INSERT INTO players (name, country, gender, role)
            VALUES ('$name','$country','$gender','$role')";

    if ($conn->query($sql)) {
        $message = "Player added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Player</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #fff;
            padding: 35px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #185a9d;
            box-shadow: 0 0 5px rgba(24,90,157,0.4);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #185a9d;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #144a7a;
        }

        .msg {
            text-align: center;
            margin-bottom: 10px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>🏏 Add Player</h2>

    <?php if ($message) echo "<div class='msg'>$message</div>"; ?>

    <form method="POST">

        <input type="text" name="name" placeholder="Player Name" required>

        <input type="text" name="country" placeholder="Country" required>

        <select name="gender" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>

        <input type="text" name="role" placeholder="Role (Batsman/Bowler/All-rounder)" required>

        <button type="submit">Add Player</button>

    </form>

</div>

</body>
</html>