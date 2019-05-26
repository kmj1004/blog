<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>블로그</title>
    <style>
      form {display:inline; }
    </style>
  </head>
  <body>
    <form action="find_idcheck.php" method="post">
      이름:<br>
      <input type="text" name="user_name"><br><br>
      이메일:<br>
      <input type="text" name="email"><br><br>
      <input type="submit" value="찾기">
    </form>
    <form action="index.php">
      <input type="submit" value="돌아가기">
  </body>
</html>
