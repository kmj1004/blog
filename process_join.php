<html>
   <form action="join.php" method="post">
     <p><input type="submit" value="돌아가기"></p>
   </form>

  <?php
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $user_name = $_POST['user_name'];
  $birth = $_POST['birth'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  if(empty($user_id)) {
       echo "<script>alert('아이디를 입력해 주세요.');</script>";
       exit();
     } elseif (!preg_match("/^([a-zA-Z0-9]){5,15}$/", $id)) {
       echo "<script>alert('아이디는 5~15자의 영문대소문자, 숫자만 사용 가능합니다.');</script>";
       exit();
     }


          if(empty($password) || (strlen($password) > 15)) {
            echo "<script>alert('비밀번호는 15자 이하로 입력해 주세요.');</script>";
            exit();
          } elseif(isset($password) && $password != $_POST['pwconfirm']) {
              echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
              exit();
            }
            else {
              $password = password_hash($password, PASSWORD_DEFAULT);
            }

            if(empty($user)) {
              echo "<script>alert('이름을 입력해 주세요.');</script>";
              exit();
            } elseif (!preg_match("/^[가-힣a-zA-Z]{1,30}$/",$user)) {
              echo "<script>alert('이름은 1~15자의 한글, 영문대소문자만 사용 가능합니다.');</script>";
              exit();
            }

          if(!empty($email)) {
            if (!preg_match("/^[a-zA-Z0-9]+@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z])+$/", $email)){
              echo "<script>alert('이메일 주소를 다시 확인해 주세요.')</script>";
              //filter_var($email, FILTER_VALIDATE_EMAIL)
              exit();
            }
          }

          if(empty($gender)) {
            echo "<script>alert('성별을 선택해 주세요.')</script>";
            exit();
          }

          include "dbconnect.php";
          $sql = "INSERT INTO member
                 VALUES(
                   $user_id, $password, $user_name,
                   $birth, $email, $gender
                 )";
           $result = mysqli_query($conn, $sql);

          if ($result == false) {
            echo '<p>문제가 생겼습니다. 관리자에게 문의해주세요</p>';
            echo '<a href="join.php">돌아가기</a>';
            error_log(mysqli_error($conn));
          } else {
            header("Location: join.php");
          }
  ?>

</html>
