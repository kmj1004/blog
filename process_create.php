<?php
  include "dbconnect.php";
  $sql = "INSERT INTO board(title, contents, created)
    VALUES(
      '{$_POST['title']}', '{$_POST['contents']}', NOW())";

  $result = mysqli_query($conn, $sql);

  if($result === false) {
    echo '<p>문제가 생겼습니다. 관리자에게 문의해주세요</p>';
    echo '<a href="index.php">돌아가기</a>';
    error_log(mysqli_error($conn));
  } else {
    header("Location: index.php");
  }
 ?>
