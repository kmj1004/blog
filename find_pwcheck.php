<?php
  include "dbconnect.php";
  $sql = "SELECT * FROM member WHERE user_id='{$_POST['user_id']}' AND email='{$_POST['email']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
    #center { text-align: center;
              margin-top: 100px;}
      form {display:inline; }
      p { margin-top:5px; }
    </style>
  </head>
  <body>
    <div id="center">
    <?php
      if(isset($row)) { ?>
        <h1>비밀번호 변경</h1>
        <form action="pw_change.php" method="post">
          <p><input type="password" name="password" placeholder="변경할 비밀번호"></p>
          <p><input type="password" name="pwconfirm" placeholder="비밀번호 확인"></p>
          <input type="hidden" name="user_id" value="<?=$_POST['user_id'] ?>">
          <input type="submit" value="변경하기">
        </form>
        <form action="index.php">
          <input type="submit" value="돌아가기">
        </form>
      </div>
    <?php
  } else {
      echo "<script>alert('존재하지 않는 계정입니다.'); history.back();</script>";
  }?>
  </doby>
</html>
