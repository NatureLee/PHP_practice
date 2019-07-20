<?php
$conn = mysqli_connect("localhost:3307", "root","cjswo6237","phpdb");

// 1 row
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn,$sql);

echo '<h1> 1 row </h1>';
$row = mysqli_fetch_array($result);
echo "<h3>".$row['title']."</h3>";
echo $row['description'];

//all rows
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn,$sql);
echo '<h1> all rows </h1>';

while($row = mysqli_fetch_array($result)){
  echo "<h3>".$row['title']."</h3>";
  echo $row['description'];
}
 ?>
