<?php
session_start();
$user_id = $_SESSION['user_id'];
$id = $_SESSION['id'];
$user_name = $_SESSION['user_name'];

 include "dbconnect.php";
 $sql = "SELECT * FROM board WHERE mem_id='$id'";
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($result)){
   if($_GET['title']==$row['title']) {
     break;
   }
 }

 $filetype = strtolower(pathinfo($row['image'], PATHINFO_EXTENSION));
 $imagetype = array('jpg', 'png');
 if(in_array($filetype, $imagetype)) {
   $file = $row['image'];
 } else {
   $file = $row['image'];
 }

 list($width, $height) = getimagesize($file);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $user_id ?>의 블로그</title>
    <style>
    form { display:inline; }
    html { text-align: center; margin-top: 100px; }
    </style>
  </head>
  <body>
    <h1><?= $user_name ?>님의 블로그</h1>

    <form action = "process_update.php" method="post">
      <input type="text" placeholder="제목" name="title" value="<?=$row['title']?>" style="width: 200px;">
      <?php
        if(isset($file)) { ?>
          <p><a href="<?=$file?>" download="<?=basename("$file")?>">
          <img src="<?= $file ?>"></a>
          <textarea name="contents" style="width:<?=$width?>px; height:<?=$height?>px;"><?=$row['contents']?></textarea></p>
        <?php } else {?>
          <p><textarea name="contents" style="width:400px; height:200px;"><?=$row['contents']?></textarea></p>
        <?php  } ?>


      <input type ="hidden" name="board_id" value="<?=$row['board_id']?>">
      <input type="hidden" name="file"
      value="<?=$file?>">
      <input type="submit" value="수정">
    </form>
    <form action="delete.php" method="post">
      <input type ="hidden" name="board_id" value="<?=$row['board_id']?>">
      <input type="hidden" name="file"
      value="<?=$file?>">
      <input type="submit" value="삭제">
    </form>
    <form action="main.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
  </body>
</html>
