<?php
   $conn = mysqli_connect("localhost", "ajinkya", "ajinkya", "verifieddb");
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
    session_start();
    $name = ucwords(strtolower($_POST['name']));
    $_SESSION["name"] = $name;
    $_SESSION["verified"] = false;
    $_SESSION["attempts"] = 0;
    $_SESSION["currentQuestion"] = 1;
    $sql = "SELECT attempted FROM verifiedtable WHERE verified = '$name'";
    if ($conn->query($sql)) {
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["attempted"] >= 0) {
                    $remainingAttempts = $row["attempted"] - 1;
                    $sql = "UPDATE verifiedtable SET attempted = '$remainingAttempts' WHERE verified = '$name'";
                    if ($conn->query($sql)) {
                        $_SESSION["attempts"] = 1;
                        $_SESSION["verified"]= true;
                        header('Location: online-quiz/');
                    }
                } else {
                    header('Location: online-quiz/timeup.php'); 
                }
            }
        }  
    }
    elseif ($_SESSION["verified"] == false) {
        header('Location: failed/');       
    }
    else {
        header('Location: error/');       
    }
    $conn->close();
?>
