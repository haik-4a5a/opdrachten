<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>
    <form class="" action="index.php" enctype="multipart/form-data" method="post">
      kies een bestand
      <input type="file" name="upload">
      <input type="submit" name="uploadButton">
    </form>
  </body>
</html>


<?php



if(isset($_POST["uploadButton"])) {

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["upload"]["name"]);
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
        echo "<img src='" . $target_file . "'>";
    }


}

 ?>
