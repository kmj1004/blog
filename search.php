<?php
  session_start();
  //$user_id = $_SESSION['user_id'];
  $mem_id = $_SESSION['mem_id'];
  include "dbconnect.php";
  $select = $_POST['select'];
  $search = $_POST['search'];

  if($select == "select_title") {
    $sql = "SELECT * FROM board
            WHERE mem_id = '$mem_id'
            AND title LIKE '%$search%'";
            /*user_id == 'test1' and*/
  } elseif($select == "select_contents") {
    $sql = "SELECT * FROM board
            WHERE mem_id = '$mem_id'
            AND contents LIKE '%$search%'";
  }
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)){
   $list .= "<a href=\"update.php?title={$row['title']}\">{$row['title']}</a><br>";
     }
?>

<!DOCTYPE html>
<html>
  <body>
    <?php
      if(empty($list)) {
        echo "<script>alert('검색결과가 없습니다.'); history.back();</script>";
      } else {
        echo $list; ?>
        <form action="main.php" method="post">
          <p><input type="submit" value="돌아가기"></p>
        </form>
      </body>
    <?php } ?>
</html>
