<html>
  <?php
    include "dbconnect.php";

    $id = $_POST['login_id'];
    $pw = $_POST['login_pw'];

    $sql = "SELECT user_id, password FROM member
            WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if(!isset($row['user_id']) || !password_verify($pw, $row['password'])) {
      echo "<script>alert('아이디 또는 비밀번호가 틀립니다.');</script>";
    } else {
      session_start();
      $_SESSION['user_id'] = $id;
      $_SESSION['password'] = $pw;
      header("Location: main.php");
    }
   ?>

   <meta http-equiv='refresh' content='0; url=index.php'>

</html>
