<?php
$conn = mysqli_connect('localhost:3307','root','cjswo6237','phpdb');

$set = settype($_POST['id'],'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn,$_POST['id']),
);

$sql =
 "DELETE from topic WHERE id = {$filtered['id']}";

  $result = mysqli_query($conn,$sql);
  if ($result == false) {
    echo "--Error 발생--";
    //error_log(mysqli_error($conn));
  }
  else {
     echo "-DELETE SUCCESS- <p>
    <a href='index.php'>돌아가기</a>";
  }
  //echo $sql;
 ?>
