<?php
  include 'dbconnect.php';

  $sql = "DELETE FROM board WHERE
    num = {$_POST['num']}";
  $result = mysqli_query($conn, $sql);
  if($result === false) {
  echo '<p>문제가 생겼습니다. 관리자에게 문의해주세요</p>';
  echo '<a href="index.php">돌아가기</a>';
  print_r(mysqli_error($conn));
} else {
  header("Location: index.php");
}
 ?>