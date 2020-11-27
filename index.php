<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test1</title>
</head>
<body>
   <img src="image.php" height="200" width="200"/></br>
  <?php
    if(isset($_SESSION['counter']) == false){
      $_SESSION['counter'] = 1;
      print "Картинка была показана: ".$_SESSION['counter']." раз(a)";
    } else {
      $counter = $_SESSION['counter'] + 1;
      $_SESSION['counter'] = $counter;
      print "Картинка была показана: ".$counter." раз(a)";
    }
  ?>
</body>
</html>