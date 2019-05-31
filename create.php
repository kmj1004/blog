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
      html { text-align: center; margin-top: 100px; }
    </style>
    <title><?= $user_name ?>님의 블로그</title>
  </head>
  <body>
    <h1><?= $user_name ?>님의 블로그</h1>

    <form action = "process_create.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="제목" name="title" style="width: 200px;">
      <input type="file" name="upload" style="width:200px;">
      <p><textarea name="contents" placeholder="내용을 입력하세요." style="width:400px; height:200px;"></textarea></p>
      <input type="submit" value="저장">
    </form>
    <form action="main.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
  </body>
</html>
