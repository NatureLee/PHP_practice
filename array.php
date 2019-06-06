<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <h1>Array</h1>
  <?php
  $aName = array('jinthree','nature');
  echo $aName[0].'<br>'; //jinthree
  echo $aName[1].'<br><p>'; //nature
  array_push($aName,'pushname');
  var_dump($aName);
   ?>
  </body>
</html>
