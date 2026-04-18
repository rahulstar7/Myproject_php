<?php
include('connection.php');

$id = $_GET['id'];
$conn->query("DELETE FROM players WHERE id=$id");

header("Location: list.php");
?>