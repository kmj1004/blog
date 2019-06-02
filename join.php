<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      form { display:inline; }
      p { margin-top: 5px; }
      strong {font-size: 13px; }
      html { text-align: center; margin-top: 100px; }
    </style>
  </head>
  <body>
      <form action="process_join.php" method="post">
        <strong>아이디</strong>
        <p><input type="text" name="user_id"></p>
        <strong>비밀번호</strong>
        <p><input type="password" name="password"></p>
        <strong>비밀번호 확인</strong>
        <p><input type="password" name="pwconfirm"></p>
        <strong>이름</strong>
        <p><input type="text" name="user_name"></p>
        <strong>생년월일</strong>
        <p><input type="date" name="birth" min="1940-01-01" style="width:169px"></p>
        <strong>성별</strong>
          <p><input type="radio" name="gender" value="여자">여자
          <input type="radio" name="gender" value="남자">남자</p>
        <strong>본인 확인 이메일</strong>
        <p><input type="text" name="email"></p>
        <input type="submit" style="width:84.5px" value="가입">
      </form>

      <form action="index.php" method="post">
        <input type="submit" style="width:84.5px" value="돌아가기">
      </form>
  </body>
</html>
