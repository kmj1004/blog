<?php
  session_start();
  include "dbconnect.php";
  $sql = "INSERT INTO board(mem_id, title, contents, created)
    VALUES(
      '{$_SESSION['id']}', '{$_POST['title']}', '{$_POST['contents']}', NOW())";

  $result = mysqli_query($conn, $sql);

  if($result === false) {
    echo '<p>문제가 생겼습니다. 관리자에게 문의해주세요</p>';
    echo '<a href="main.php">돌아가기</a>';
    error_log(mysqli_error($conn));
  } else {
    echo "<script>alret('저장되었습니다.');</script>";
    header("Location: main.php");
  }
 ?>
