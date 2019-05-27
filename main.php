
<?php
  session_start();
  $user_id = $_SESSION['user_id'];

  include "dbconnect.php";
  $sql = "SELECT * FROM member LEFT JOIN board
          ON member.id = board.mem_id WHERE user_id='$user_id'";
  $result = mysqli_query($conn, $sql);

  $list='';
  while($row=mysqli_fetch_array($result)) {
     $list .= "<tr><td><a href=\"update.php?title={$row['title']}\">{$row['title']}</a></td>
              <td>{$row['created']}</td></tr>";
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['mem_id'] = $row['mem_id'];
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$_SESSION['user_name'] ?>님의 블로그</title>
    <style>
      form {display: inline;
            text-align: right; }
      a { text-decoration: none;
          color: gray; }
      table,tr,td { width:50%;
              border-bottom: 1px solid gray;
              border-collapse: collapse;
              margin: auto; }
      select { margin-top: 15px;
                margin-bottom: 15px; }
      html { text-align: center; }
    </style>
  </head>
  <body>
    <h1>안녕하세요. <?= $_SESSION['user_name'] ?>님.</h1>
    <table>
      <tr>
        <td>글제목</td>
        <td>작성일</td>
      </tr>
        <?= $list ?>
    </table>
    <form action="search.php" method="post">
      <select name="select" style="height:20px">
        <!--<option value="name">작성자</option> -->
        <p><option value="select_title">제목</option></p>
        <option value="select_contents">내용</option>
      </select>
      <input type="hidden" value="<?php $_POST['search']?>">
      <input type="text" name="search">
      <input type="submit" value="검색">
    </form>
    <form action = "create.php" method="post">
      <!-- margin 설정 -->
      <input type="hidden" name="create" value="<?= $row['user_name'] ?>">
      <input type="submit" value="글쓰기"><br>
    </form>
    <form action="logout.php" method="post">
      <input type="submit" value="로그아웃">
    </form>
    <form action='withdrawal.php' method="post">
      <input type="submit" value="탈퇴하기">
    </form>
  </body>
</html>
