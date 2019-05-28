<?php
session_start();
$user_id = $_SESSION['user_id'];
$id = $_SESSION['id'];

 include "dbconnect.php";
 $sql = "SELECT * FROM board WHERE mem_id='$id'";
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($result)){
   if($_GET['title']==$row['title']) {
     break;
   }
 }
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
    <form action = "process_update.php" method="post">
      <p><input type="text" placeholder="제목" name="title" value="<?=$row['title']?>" style="width: 200px; "></p>
      <p><textarea name="contents" placeholder="내용을 입력하세요." style="width:400px; height:200px;"><?=$row['contents']?></textarea></p>
      <input type ="hidden" name="board_id" value="<?=$row['board_id']?>">
      <input type="submit" value="수정">
    </form>
    <form action="delete.php" method="post">
      <input type ="hidden" name="board_id" value="<?=$row['board_id']?>">
      <input type="submit" value="삭제">
    </form>
    <form action="main.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
  </body>
</html>
