<?php
$conn = mysqli_connect('localhost:3307','root','cjswo6237','phpdb');

$filtered = array(
  'name'=>mysqli_real_escape_string($conn,$_POST['name']),
  'profile'=>mysqli_real_escape_string($conn,$_POST['profile'])
);

$sql =
 "INSERT INTO author(name, profile)
  VALUES('{$filtered['name']}','{$filtered['profile']}')";

  $result = mysqli_query($conn,$sql);
  if ($result == false) {
    echo "--Error 발생--";
    //error_log(mysqli_error($conn));
  }
  else {
     header('Location: author.php'); //여기로 보내
  }
  //echo $sql;
 ?>
