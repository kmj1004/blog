<?php
  include "dbconnect.php";
  $select = $_POST['select'];
  $search = $_POST['search'];

  if(!($search == '')) {
    if($select[0] == "select_title") {
      $sql = "SELECT * FROM board
              WHERE title LIKE '%$search%'";
    } elseif($select[0] == "select_contents") {
      $sql = "SELECT * FROM board
              WHERE contents LIKE '%$search%'";
    }
      $result = mysqli_query($conn, $sql);

      $list = '';
      while($row = mysqli_fetch_array($result)){
           $list .= "<a href=\"update.php?title={$row['title']}\">{$row['title']}</a><br>";
         }
  } else {
    echo "값을 입력해주세요.";
  }

?>

<!DOCTYPE html>
<html>
  <body>
    <?php if(isset($list)) {echo $list;} ?>

    <form action="index.php" method="post">
      <br><input type="submit" value="돌아가기"></br>
    </form>
  </body>
</html>
