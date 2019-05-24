<!DOCTYPE html>
<?php
  session_start();
  $user_id = $_SESSION['user_id'];
  $user_name = $_SESSION['user_name'];


?>

<html>
  <head>
    <meta charset="utf-8">
    <style>
      form { display:inline; }
    </style>
    <title><?= $user_name ?>님의 블로그</title>
  </head>
  <body>
    <h1><?= $user_name ?>님의 블로그</h1>

    <form action = "process_create.php" method="post">
      <p>제목 <input type="text" name="title"></p>
      <p>내용<br><textarea name="contents" cols="25"></textarea></p>
      <input type="submit" value="저장">
    </form>
    <form action="main.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
  </body>
</html>
