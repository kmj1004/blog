<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      form { display:inline; }
    </style>
  </head>
  <body>
    <form action="process_join.php" method="post">
      <fieldset>
      아이디:<br>
      <p><input type="text" name="user_id"></p>
      비밀번호:<br>
      <p><input type="password" name="password"></p>
      비밀번호 확인:<br>
      <p><input type="password" name="pwconfirm"></p>
      이름:<br>
      <p><input type="text" name="user_name"></p>
      생년월일:<br>
      <p><input type="date" name="birth" min="1940-01-01"></p>
      성별<br>
        <p><input type="radio" name="gender" value="여자">여자
        <input type="radio" name="gender" value="남자">남자</p>
      이메일:<br>
      <p><input type="text" name="email"></p>
      <input type="submit" value="가입">
    </form>

    <form action="index.php" method="post">
      <input type="submit" value="돌아가기">
    </form>
    </fieldset>
  </body>
</html>
