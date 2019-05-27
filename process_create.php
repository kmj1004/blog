<?php
  session_start();
  $mem_id = $_SESSION['id'];
  include "dbconnect.php";
  $sql = "INSERT INTO board(title, contents, created, mem_id)
    VALUES(
      '{$_POST['title']}', '{$_POST['contents']}', NOW(), '$mem_id')";
  $result = mysqli_query($conn, $sql);

  if($result === false) {
    error_log(mysqli_error($conn));
    echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요.'); history.back(); </script>";
  } else {
    echo "<script>alert('저장되었습니다.'); history.go(-2); </script>";
  }
 ?>
