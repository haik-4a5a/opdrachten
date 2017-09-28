<?php
session_start();

$user = "open";
$pass = "sesame";
$error;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($_POST['User'])  || empty($_POST['Pass'])) {
  session_destroy();
header("location: /github%20Local/opdrachten/PHP/inlog/index.php");
} else{
  if (($user === $_POST['User'] && $pass === $_POST['Pass']) || isset($_SESSION['user'])) {
    $user = $_POST['User'];
    echo "welkom" . " ".  $_POST['User'];



  }
}
};





 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>loguit</title>
  </head>
  <body>
    <form action="logout.php" method="post">
      <button type="submit" name="loguit">loguit</button>
    </form>
  </body>
</html>
