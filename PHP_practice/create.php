<?php
function print_title(){
  if (isset($_GET['id'])) {
    echo $_GET['id'];
  }
  else {
    echo "Wellcome!";
  }
}
function print_description(){
  if (isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
  }
  else {
    echo " ";
  }
}
function makelist(){
  $list = scandir('./data');
  $a = 0;
  while ($a < count($list)) {
    if ($list[$a] != '.' && $list[$a] != '..') {
      echo "<li><a href = \"index.php?id=$list[$a]\">$list[$a]</a></li>\n";
    }
    $a= $a + 1;
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      makelist();
       ?>
    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
      <p><input type="text" name="title" placeholder="Title"></p>
      <p><textarea name="description" placeholder="Description"></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
