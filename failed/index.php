<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We're Sorry! You're not eligible for the $100 quiz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="dialog">
        <div class="congrats">
            We're Sorry!
        </div> 
        <div class="name">  
            <?php
            session_start(); 
            if($_SESSION["name"]=="")
                $_SESSION["name"] = "Hacker";
            echo $_SESSION["name"];?>
        </div>
        <div class="context">
            You are not eligible for the quiz.
        </div>
        <div class="friends">
        <a class="share" href="../online-quiz/">
            Resume Quiz
        </a>
        </div>
    </div>
</div>
<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>