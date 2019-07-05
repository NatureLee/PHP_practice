<?php
 $conn = mysqli_connect("localhost:3307", "root","cjswo6237","phpdb");
 $sql = "select * from topic";
 $result =  mysqli_query($conn,$sql);
 //$row = mysqli_fetch_array($result);

 $list = '';
 while ( $row = mysqli_fetch_array($result)) {
   $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['title']}</a></li>";
 }

 $article = array(
   'title'=>'Wellcom',
   'description'=>'Hello, Everyone!'
 );

  if(isset($_GET['id'])){
   $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
   $sql = "select * from topic where id = {$filtered_id}";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);
   $article['title']=$row['title'];
   $article['description']=$row['description'];
  }
 //while문 다르게 쓰기
 /*while($row!=NULL){
   echo "<li>".$row['title']."</li>";
   $row = mysqli_fetch_array($result);
 }*/

 ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?= $list ?>
    </ol>
    <form action="process_update.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <p> <input type="text" name="title" placeholder="title" value="<?=$article['title']?>"> </p>
      <p> <textarea name="description" placeholder="description"><?=$article['description']?></textarea> </p>
      <p> <input type="submit"> </p>
    </form>
  </body>
</html>
