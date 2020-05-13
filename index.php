<?php



function getAQuote(){

  $lines = explode("\n", file_get_contents('quotes.txt'));

  $line = $lines[mt_rand(0, count($lines) - 1)];
  
  list($text) = explode('|', $line);


  echo '<div style="margin-top:30px;">
              
              <p style="font-weight:300;">' . $text . '</p>
              
             

                </div>';


}






?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>QuickQuote</title>
  </head>
  <body>
    

      <form action="" method="POST">
        <div class="container text-center" style="margin-top:10%;">

            <h1 class="display-3" style="font-weight:400;">QuickQuote</h1>
            <span style="font-style:italic;">Get some fire quotes🔥</span>

            <div>

              <button type="submit" class="btn btn-success" style="margin-top:20px;" name="generateNewQuote">Generate Quote</button>
              <?php
              if(isset($_POST['generateNewQuote'])){

                getAQuote();
              
              
              
              
              }


                ?>

            </div>


            




  </div>

</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>