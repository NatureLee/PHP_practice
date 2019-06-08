<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>

    <h3>Basic</h3>
    <?php
    function basic(){
      printf("It's basic function!");
    }
    basic();
     ?>

     <h3>parameter &amp; argument</h3>
     <?php
     function sum($left,$right){
       printf($left+$right);
       printf("<br>");
     }
     sum(2,4); //6
     sum(4,6); //10
      ?>

      <h3>return</h3>
      <?php
      function sum2 ($left,$right){
        return $left + $right;
      }
      printf(sum2(2,4)); //6
      file_put_contents('data/PHP',sum2(2,4));
       ?>
  </body>
</html>
