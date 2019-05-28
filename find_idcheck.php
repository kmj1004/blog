<?php
  include "dbconnect.php";
  $sql = "SELECT * FROM member WHERE user_name='{$_POST['user_name']}' AND email='{$_POST['email']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  if(isset($row)) {
    echo "<script>alert('귀하의 아이디는 $row[user_id] 입니다.');history.go(-2);</script>";
  } else {
    echo "<script>alert('존재하지 않는 계정입니다.');history.back();</script>";
    }
 ?>
