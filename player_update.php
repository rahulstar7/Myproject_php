<?php
include('connection.php');

$id = $_GET['id'];

if ($_POST) {
    $name = $_POST['name'];
    $conn->query("UPDATE players SET name='$name' WHERE id=$id");
    echo "Updated!";
}
?>

<form method="POST">
    Name: <input name="name"><br>
    <button>Update</button>
</form>