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
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </body>
</html>
