<?php
include('connection.php');

$result = $conn->query("SELECT * FROM players");

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['country'];
    echo " <a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}
?>