<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Results from the survey</title>
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Solway&family=Titillium+Web:wght@300&display=swap');
        body{
            background-image: url(./imgas/bg2.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            color:blue;
            font-family: 'Titillium Web', sans-serif;
            font-size:20px;
        }
    </style>
    </head>
    <body>
      <?php
      //Use var_dump to use gobble arrays
      //var_dump($_POST);
      
      $email = $_POST['email'];
      $emotion = $_POST['emotion'];
      $chosen_game = $_POST['chosen_game'];
      $genre = $_POST['genre'];

      echo "<h1>Thank you for filling in this surbey! Your Result are in!<h1> <br/>";

      //Verified and return name
      if (!isset($_POST['f_name'])){
        echo "You have not entered your name ):";
      }
      else {
        $full_name = $_POST['f_name'];
        echo "Your name is $full_name! <br/>";
      }

      //Verified and return email address if field was filled
      if (!isset($_POST['email'])){
        echo 'You have not entered your email address ):';
      }
      else {
        echo "Your email addres is $email! <br/>";
      }

      //Verified and return emotion if field was filled
      if (!isset($_POST['emotion'])){
        echo 'You have not entered how you feel about the new video game... ):';
      }
      else {
        echo "You feel like $emotion on a scale from 1-100 conserning $chosen_game <br/>";
      }

      //Verified and return game name if field was filled
      if (!isset($_POST['chosen_game'])){
        echo 'You have not entered which game you are the most exited for in 2023 ):';
      }
      else {
        echo "The game you are the most exited for is $chosen_game! <br/>";
      }
      
      ?>  
    </body>
</html>