<?php
//sql연결
 $conn = mysqli_connect("localhost:3307", "root","cjswo6237","phpdb");

//쿼리문
 $sql =
 "insert into topic(
   title,
   description,
   created)
   VALUE(
     'MySQL',
     'MySQL is...',
     NOW())";

//쿼리 전달
 $result = mysqli_query($conn, $sql);
  if($result == false){
      echo mysqli_error($conn); //에러 확인
}
 ?>
