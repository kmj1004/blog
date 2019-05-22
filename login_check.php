<html>

  <?php
    include "dbconnect.php";

    $id = $_POST['login_id'];
    $pw = $_POST['login_pw'];

    $sql = "SELECT user_id, password FROM member
            WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);


    if (password_verify($pw, $row['password']) == false) {
      echo "<script>alert('아이디 또는 비밀번호가 틀립니다.')</script>";
      header("Location: login.php");
    }


   ?>

   <form action="index.php" method="post">
     <input type="hidden" value="<?php $id ?>">
   </form>
    <?php header("Location: index.php"); ?>
   <!--  <a href="login.php">돌아가기</a> -->


</html>
