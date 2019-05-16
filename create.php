<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>민지님의 블로그</title>
    <!--name으로 대체할 예정-->
  </head>
  <body>
    <h1>민지님의 블로그</h1>
    <!--name으로 대체할 예정-->

    <form action = "process_create.php" method="post">
      <p>제목 <input type="text" name="title"></p>
      <p>내용<br><textarea name="contents" cols="25"></textarea></p>
      <p><input type="submit" value="저장"></p>
    </form>
    <form action="index.php" method="post">
      <p><input type="submit" value="돌아가기"></p>
    </form>
  </body>
</html>
