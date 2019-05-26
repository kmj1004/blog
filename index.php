<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>블로그</title>
    <style>
      #center { text-align: center;
                margin-top: 100px; }
      form { display:inline; }
      a { text-decoration: none;
          color: gray; }
      #bar { display: inline-grid;
              margin-right: 1px solid gray; }
    </style>
  </head>
  <body>
    <div id=center>
      <h1>환영합니다.</h1>
      <form action="login_check.php" method="post">
        <input type="text" name="login_id" placeholder="아이디" size="15"><br><br>
        <input type="password" name="login_pw" placeholder="비밀번호" size="15"><br><br>
        <input type="submit" value="로그인">
      </form>
      <form action="join.php" method="post">
        <input type="submit" value="회원가입">
      </form>
      <p><div id="bar"><a href="find_id.php">아이디</a></div><a href="find_pw.php">비밀번호 찾기</a></p>
    </div>
  </body>
</html>
