<?php
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $birth = $_POST['birth'];
  $gender = $_POST['gender'];


  include "dbconnect.php";
  $sql = "SELECT user_id FROM member";
  $result = mysqli_query($conn, $sql);
  $row= mysqli_fetch_array($result);

  if(empty($user_id)) {
    echo "<script>alert('아이디를 입력해 주세요.'); history.back();</script>";
    exit();
  } elseif($user_id == $row['user_id']) {
    echo "<script>alert('이미 사용중인 아이디입니다.'); history.back();</script>";
    exit();
  } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $user_id)) {
    echo "<script>alert('아이디는 5~15자의 영문대소문자, 숫자만 사용 가능합니다.'); history.back();</script>";
    exit();
  }

if(empty($password) || (strlen($password) > 15)) {
  echo "<script>alert('비밀번호는 15자 이하로 입력해 주세요.'); history.back();</script>";
     exit();
   } elseif(isset($password) && $password != $_POST['pwconfirm']) {
       echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
       exit();
     }
     else {
       $password = password_hash($password, PASSWORD_DEFAULT);
     }

   if(empty($user_name)) {
     echo "<script>alert('이름을 입력해 주세요.'); history.back();</script>";
     exit();
   } elseif (!preg_match("/^[가-힣a-zA-Z0-9]{1,15}$/",$user_name)) {
     echo "<script>alert('이름은 1~15자의 한글, 영문대소문자만 사용 가능합니다.'); history.back();</script>";
     exit();
   }

  if (empty($birth)) {
    echo "<script>alert('생년월일을 선택해 주세요.'); history.back();</script>";
    exit();
  }

 if(empty($gender)) {
   echo "<script>alert('성별을 선택해 주세요.'); history.back();</script>";
   exit();
 }

 if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "<script>alert('이메일 주소를 확인해 주세요.'); history.back();</script>";
     exit();
   }

  $sql = "INSERT INTO member(user_id, password, user_name, birth, gender, email)
          VALUES(
            '$user_id', '$password', '$user_name',
            '$birth', '$gender', '$email'
          )";

  $result = mysqli_query($conn, $sql);

  if ($result == false) {
   echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요'); location.href='index.php';</script>";
   error_log(mysqli_error($conn));
   } else {
     echo "<script>alert('회원가입 성공!'); location.href='index.php'; </script>";
   }
?>
