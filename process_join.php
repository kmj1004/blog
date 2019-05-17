<html>
   <form action="join.php" method="post">
     <p><input type="submit" value="돌아가기"></p>
   </form>

  <?php
   $id = $_POST['id'];
   $password = $_POST['password'];
   $user = $_POST['user'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
  if(empty($id)) {
       echo "<script>alert('아이디를 입력해 주세요.');</script>";
       exit();
     } elseif(!preg_match("/^[a-zA-Z0-9]+$/", $id)) {
       echo "<script>alert('아이디는 영문대소문자, 숫자만 입력해 주세요.');</script>";
       exit();
     }

     if(empty($password)) {
       echo "<script>alert('비밀번호를 입력해 주세요.');</script>";
       exit();
     } elseif(isset($password) && $password != $_POST['pwconfirm']) {
         echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
         exit();
       } else {
         $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       }

       if(empty($user)) {
         echo "<script>alert('이름을 입력해 주세요.');</script>";
         exit();
       } elseif(!preg_match("/^[가-힣a-zA-Z]+$/",$user)) {
         echo "<script>alert('이름은 한글, 영문대소문자만 입력해 주세요.');</script>";
         exit();
       }

     if(empty($email)) {
       echo "<script>alert('이메일을 입력해 주세요.')</script>";
       exit();
     }

     if(empty($gender)) {
       echo "<script>alert('성별을 선택해 주세요.')</script>";
       exit();
     }

     include "dbconnect.php";
    ?>

</html>
