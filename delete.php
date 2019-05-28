<?php
  include 'dbconnect.php';

  $sql = "DELETE FROM board WHERE
    board_id = {$_POST['board_id']}";
  $result = mysqli_query($conn, $sql);
  if($result === false) {
  echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요'); history.back(); </script>";
  print_r(mysqli_error($conn));
} else {
  echo "<script>alert('삭제되었습니다.');history.go(-2); </script>";
}
 ?>
