<?php
  session_start();
  $user_id = $_SESSION['user_id'];
  include "dbconnect.php";
  /*$sql = "DELETE FROM member WHERE user_id='$user_id'";
  $result = mysqli_query($conn, $sql);*/
    $sql = "DELETE member, board
            FROM member LEFT JOIN board
            ON member.id = board.mem_id
            WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);

  if (!isset($result)) {
    var_dump(mysqli_error($conn));
    echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요.'); hostory.back();</script>";
   } else {
     echo "<script>alert('탈퇴 완료.');</script>";
   }
   session_destroy();
 ?>
  <meta http-equiv='refresh' content='0; url=index.php'>
