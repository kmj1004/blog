<?php
  include "dbconnect.php";
  $search = $_POST['search'];
  $sql = "SELECT * FROM board
          WHERE title LIKE '%$search%'
          AND contents LIKE '%$search%'";
  $result = mysqli_query($conn, $sql);

  $list = '';
  while($row = mysqli_fetch_array($result)){
       $list .= "<a href=\"update.php?title={$row['title']}\">{$row['title']}</a><br>";
     }
  echo $list;

?>

<!DOCTYPE html>
<html>
  <body>
    <form action="index.php" method="post">
      <br><input type="submit" value="돌아가기"></br>
    </form>
  </body>
</html>
