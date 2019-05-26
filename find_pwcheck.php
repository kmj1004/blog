<?php
  include "dbconnect.php";
  $sql = "SELECT * FROM member WHERE user_id='{$_POST['user_id']}' AND email='{$_POST['email']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
  <body>
    <?php
      if(isset($row)) { ?>
        <form action="pw_change.php" method="post">
          변경할 비밀번호:<br>
          <p><input type="password" name="password"></p>
          비밀번호 확인:<br>
          <p><input type="password" name="pwconfirm"></p>
          <p><input type="hidden" name="user_id" value="<?=$_POST['user_id'] ?>">
          <input type="submit" value="변경하기">
    <?php
  } else {
      echo "<script>alert('존재하지 않는 계정입니다.'); history.back();</script>";
  }?>
  </doby>
</html>
