<?php
    $conn = mysqli_connect("localhost", "root", "", "verifieddb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
