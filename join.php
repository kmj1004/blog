<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="process_join.php" method="post">
      <fieldsest>
      아이디:<br>
      <p><input type="text" name="id"></p>
      비밀번호:<br>
      <p><input type="text" name="password"></p>
      비밀번호 확인:<br>
      <p><input type="text" name="pwconfirm"></p>
      이메일:<br>
      <p><input type="text" name="email"></p>
      이름:<br>
      <p><input type="text" name="user"></p>
      성별<br>
        <p><input type="radio" name="gender" value="여자">여자
        <input type="radio" name="gender" value="남자">남자</p>
      <input type="submit" value="가입">
    </form>

    <form action="index.php" method="post">
      <p><input type="submit" value="돌아가기"></p>
    </form>
    </fieldset>
  </body>
</html>
