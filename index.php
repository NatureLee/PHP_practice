<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
       //list에 담아놓고 그걸 반복문으로 플어서 보여줌
         $list = scandir('./data');
         $a = 0;
         while ($a < count($list)) {
           if ($list[$a] != '.' && $list[$a] != '..') {
             echo "<li><a href = \"index.php?id=$list[$a]\">$list[$a]</a></li>\n";
           }
           $a= $a + 1;
         }
        ?>
    </ol>
    <h2>
      <?php
        if (isset($_GET['id'])) {
          echo $_GET['id'];
        }
        else {
          echo "Wellcome!";
        }
        ?>
      </h2>
      <?php
      if (isset($_GET['id'])) {
        echo file_get_contents("data/".$_GET['id']);
      }
      else {
        echo " ";
      }
       ?>
  </body>
</html>
