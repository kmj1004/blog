<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>블로그</title>
    <style>
      form { display:inline; }
      a { text-decoration: none; }
    </style>
  </head>
    <body>
      <h1>환영합니다.</h1>
      <form action="login_check.php" method="post">
        아이디:<br>
        <p><input type="text" name="login_id"></p>
        비밀번호:<br>
        <p><input type="password" name="login_pw"></p>
        <input type="submit" value="로그인">
      </form>
      <form action="join.php" method="post">
        <input type="submit" value="회원가입">
      </form>
      <p><a href="">아이디</a>.<a href="">비밀번호 찾기</a></p>
    </body>

</html>
