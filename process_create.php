<?php
session_start();
$mem_id = $_SESSION['id'];

include "dbconnect.php";
$targetdir = "uploads/";
$targetfile = $targetdir.basename($_FILES["upload"]["name"]);
$tmp_file = $_FILES["upload"]["tmp_name"];
//서버 임시저장 파일
$filetype =strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));
$imagetype = array('jpg', 'png');
if(in_array($filetype, $imagetype)) {
  list($width, $height) = getimagesize($tmp_file);

  $percent = 0.5;
  $new_width = $width * $percent;
  $new_height = $height * $percent;
  $newimage = imagecreatetruecolor($new_width, $new_height);
  switch($filetype) {
    case 'jpg':
      $source = imagecreatefromjpeg($tmp_file);
      imagecopyresampled($newimage, $source ,0,0,0,0, $new_width, $new_height, $width, $height);
      imagejpeg($newimage, $targetfile);
      break;
    case 'png':
      $source = imagecreatefrompng($tmp_file);
      imagecopyresampled($newimage, $source ,0,0,0,0, $new_width, $new_height, $width, $height);
      imagepng($newimage, $targetfile);
      break;
    }
  } else {
    move_uploaded_file($tmp_file, $targetfile);
  }

$sql = "INSERT INTO board(title, contents, image, created, mem_id)
        VALUES( '{$_POST['title']}', '{$_POST['contents']}', '$targetfile', NOW(), '$mem_id')";
$result = mysqli_query($conn, $sql);

if($result === false) {
error_log(mysqli_error($conn));
echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요.'); location.href='main.php'; </script>";
} else {
  echo "<script>alert('저장되었습니다.'); location.href='main.php'; </script>";
}
 ?>
