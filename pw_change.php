<?php
  include "dbconnect.php";
  $password = $_POST['password'];
  if(empty($password) || (strlen($password) > 15)) {
    echo "<script>alert('비밀번호는 15자 이하로 입력해 주세요.'); history.back();</script>";
    exit();
  } elseif($password != $_POST['pwconfirm']) {
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
    exit();
  } else {
    $password = password_hash($password, PASSWORD_DEFAULT);
  }
  $sql = "UPDATE member SET password='$password'
        WHERE user_id='{$_POST['user_id']}'";
  $result = mysqli_query($conn, $sql);
  if($result === false) {
     echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요'); history.back();</script>";
   } else {
     echo "<script>alert('비밀번호가 변경되었습니다.'); history.go(-3); </script>";

   }

 ?>
