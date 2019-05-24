<?php
 include "dbconnect.php";
 $sql = "SELECT * FROM board";
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
    <title>민지님의 블로그</title>

  </head>
  <body>

      <form action = "process_update.php" method="post">
        <p>제목 <input type="text" name="title" value="<?=$row['title']?>"></p>
        <p>내용<br><textarea name="contents" cols="25"><?=$row['contents']?></textarea></p>
        <input type ="hidden" name="num" value="<?=$row['num']?>">
        <input type ="hidden" name="created" value="<?=$row['created']?>">
        <input type="submit" value="수정">
      </form>
      <form action="delete.php" method="post">
        <input type ="hidden" name="num" value="<?=$row['num']?>">
        <br><input type="submit" value="삭제"></br>
      </form>
      <form action="main.php" method="post">
        <br><input type="submit" value="돌아가기"></br>
      </form>


  </body>
</html>
