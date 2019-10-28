<?php
    session_start();
    if ($_SESSION["verified"]==false)
        header('Location: ../failed'); 
    if (($_SESSION["currentQuestion"]>30))
        header('Location: timeup.php');      
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Start your Quiz!</title>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: 3em;">
            <div class="col-md-12">
            <h3>The $100 Quiz</h3>
            <p style="margin-top:-0.7em;">Sponsored by GenM Inc.</p>
            You can start giving your quiz now!
                <br>
                Following are the instructions for the quiz-
                <ol>
                <li>
                    There shall be 20 questions.
                </li>
                <li>
                    Each question shall carry 1 mark.
                </li>
                <li>
                    Time shall be 30 seconds per question. Total time - 10 minutes.
                </li>
                <li>
                    Do not refresh or press back button. Doing so will result in penalty.
                </li>
                </ol>
                <?php
                    $location = 'Location: question'.$_SESSION["currentQuestion"].'.php';
                ?>
                <form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                    <p><input type="checkbox" required name="terms"> I accept the Terms and Conditions  </p>
                    <p><input type="submit" class="btn btn-primary"></p>
                </form>
                <?php
                if(isset($_POST['terms']))
                    header($location);
                ?>
            </div>
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>