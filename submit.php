<?php
    $conn = mysqli_connect("localhost", "ajinkya", "ajinkya", "genm");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        $email = $_POST['email'];
        $sql = "INSERT INTO mailing (email) VALUES ('$email')";
        if ($conn->query($sql) === TRUE) {
            $message = "Success!";
            header('Location: index.html');
        }
        else {
            $message = "Failed!";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
        $conn->close();
    }
?>