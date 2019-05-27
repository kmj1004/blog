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
      html { text-align: center; }
    </style>
    <title><?= $user_name ?>님의 블로그</title>
  </head>
  <body>
    <h1><?= $user_name ?>님의 블로그</h1>

    <form action = "process_create.php" method="post">
      <p>제목 <input type="text" style="width:'250px'" style="text-align: left" name="title"></p>
      <p><textarea name="contents" style="width:'1000px'" placeholder="내용"></textarea></p>
      <input type="submit" value="저장">
    </form>
    <form action="main.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
  </body>
</html>
