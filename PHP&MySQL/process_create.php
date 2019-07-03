<?php
$conn = mysqli_connect('localhost:3307','root','cjswo6237','phpdb');

$filtered = array(
  'title'=>mysqli_real_escape_string($conn,$_POST['title']),
  'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);

$sql =
" insert into topic(title,description,created)
  values('{$filtered['title']}','{$filtered['description']}',NOW())";

  $result = mysqli_query($conn,$sql);
  if ($result == false) {
    echo "--Error 발생--";
    //error_log(mysqli_error($conn));
  }
  else {
     echo "-SUCCESS- <p>
    <a href='index.php'>돌아가기</a>";
  }
  //echo $sql;
 ?>
