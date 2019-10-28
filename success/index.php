<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Congratulations! You are now eligible to appear for 100$ quiz!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="dialog">
        <div class="congrats">
            Congrats!
        </div> 
        <div class="name">  
            <?php session_start(); echo $_SESSION["name"];?>
        </div>
        <div class="context">
            You are eligible for the $100 quiz!
        </div>
        <div class="friends">
        <a class="share" href="http://bit.ly/genm-quiz">
            Ask your friends to join!
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