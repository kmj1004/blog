<?php
  include "dbconnect.php";
  $sql = "UPDATE board
    SET
      title = '{$_POST['title']}',
      contents = '{$_POST['contents']}',
      created = NOW()
    WHERE
      board_id = '{$_POST['board_id']}'";

  $result = mysqli_query($conn, $sql);

  if($result === false) {
    error_log(mysqli_error($conn));
    echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요.'); history.go(-2); </script>";
  } else {
    echo "<script>alert('저장되었습니다.'); history.go(-2); </script>";
  }
 ?>
