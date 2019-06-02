
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>블로그</title>
<style>
  #center { text-align: center;
            margin-top: 100px;}
  form {display:inline; }
  p { margin-top:5px; }
</style>
</head>
<body>
<div id="center">
  <h1>아이디 찾기</h1>
<form action="find_idcheck.php" method="post">
  <p><input type="text" name="user_name" placeholder="이름"></p>
  <p><input type="text" name="email" placeholder="이메일"></p>
  <input type="submit" value="찾기">
</form>
<form action="index.php">
  <input type="submit" value="돌아가기">
</div>
</body>
</html>
