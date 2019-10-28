<?php
    session_start();
    if ($_SESSION["verified"]==false)
        header('Location: ../failed');    
    if($_SESSION["currentQuestion"]>20)
        header('Location: timeup.php');   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>The $100 Quiz</title>
    <script> 
        var interval = 900000;
        function reset() {
            localStorage.endTime = +new Date + interval;
        }
        if( ! localStorage.endTime ) {
            reset();
        }
        setInterval( function() {
            var remaining = localStorage.endTime - new Date;
            if( remaining >= 0 ) {
                var remainingMinutes = Math.floor( remaining / 60000 );
                var remainingSeconds = Math.floor( remaining / 1000 );
                $('#timer').text( remainingMinutes+ " Minutes (" + remainingSeconds+" seconds)");
                if(remaining < 99) {
                    window.location.replace("timeup.php");  
                }
            }
            else {
                reset();
            }
        }, 100 );
    </script> 
</head> 
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
            <h3>Question 8
            </h3>
            <div>Time remaining - <span id="timer"></span></div>
            <div class="question mt-3">
            Which life insurance company launched India's first and the simplest life insurance product that can be bought at a point of sale?
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                <div class="mt-1 ml-1">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="option1" value="1">
                            <label class="form-check-label" for="option1">
                            Bajaj Allianz Life Insurance
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="option2" value="2">
                            <label class="form-check-label" for="option2">
                            Exide Life Insurance
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="option3" value="3">
                            <label class="form-check-label" for="option3">
                            Life Insurance Corporation of India
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="option4" value="4">
                            <label class="form-check-label" for="option4">
                            Edelweiss Tokio Life Insurance Company Limited
                            </label>
                        </div>
                        <div class="mt-2">
                            <input type="submit" class="btn btn-primary" style="padding: 0.17rem 1rem">
                        </div>
                     </div>
                </form>
                <?php
                if(isset($_POST["answer"])) {
                    include 'DBconnection.php';
                    $name = $_SESSION['name'];
                    $ans = $_POST['answer'];
                    $sql = "UPDATE verifiedtable SET ans8 = '$ans' WHERE verified = '$name'";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: question9.php');
                    }
                    else {
                        header('Location: question8.php');
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> 