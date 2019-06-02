<?php
  session_start();
  include "dbconnect.php";

  /*if(isset($_POST['upload']) {
    $targetdir = "uploads/";
    $targetfile = $targetdir.$_POST['upload'];
    $tmp_file = $_FILES["upload"]["tmp_name"];
    var_dump($tmp_file);

    $filetype =strtolower(pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION));
    $imagetype = array('jpg', 'png');
    var_dump($filetype);
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
    unlink("{$_POST['file']}");

    $sql = "UPDATE board
      SET
        title = '{$_POST['title']}',
        contents = '{$_POST['contents']}',
        image = '$targetfile',
        created = NOW()
      WHERE
        board_id = '{$_POST['board_id']}'";
  } else {
    $sql = "UPDATE board
      SET
        title = '{$_POST['title']}',
        contents = '{$_POST['contents']}',
        created = NOW()
      WHERE
        board_id = '{$_POST['board_id']}'";
  }*/
  $sql = "UPDATE board
    SET
      title = '{$_POST['title']}',
      contents = '{$_POST['contents']}',
      created = NOW()
    WHERE
      board_id = '{$_POST['board_id']}'";

  $result = mysqli_query($conn, $sql);

  if($result == false) {
    error_log(mysqli_error($conn));
    echo "<script>alert('문제가 생겼습니다. 관리자에게 문의해주세요.'); location.href='main.php'; </script>";
  } else {
    echo "<script>alert('저장되었습니다.'); location.href='main.php'; </script>";
  }
 ?>
