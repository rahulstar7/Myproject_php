<?php
include('connection.php');

$message = "";

if (isset($_POST['register'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {

        $check = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($check);

        if ($result->num_rows > 0) {
            $message = "Username already exists!";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, password)
                    VALUES ('$username', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                $message = "Registration successful!";
            } else {
                $message = "Error: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #fff;
            padding: 35px;
            width: 340px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #ff5e62;
            box-shadow: 0 0 5px rgba(255,94,98,0.4);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #ff5e62;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #e64c50;
        }

        .msg {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>📝 Register</h2>

    <?php if ($message) echo "<div class='msg'>$message</div>"; ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <input type="password" name="confirm_password" placeholder="Confirm Password" required>

        <button type="submit" name="register">Register</button>

    </form>

</div>

</body>
</html>