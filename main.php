
<?php
  session_start();
  $user_id = $_SESSION['user_id'];

  include "dbconnect.php";
  $sql = "SELECT * FROM member LEFT JOIN board
          ON member.id = board.id WHERE user_id='$user_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $list = '';
/*  while(true){
    if($row['user_id'] == $user_id) {
       $list .= "<a href=\"update.php?title={$row['title']}\">{$row['title']}</a><br>";
       var_dump($row['user_id']);
    }
  }
  */

  var_dump()
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$row['user_name'] ?>님의 블로그</title>

  </head>
  <body>
    <h1>안녕하세요. <?= $row['user_name'] ?>님.</h1>

      <?=$list?>

    <form action = "create.php" method="post">
      <input type="hidden" name="create" value="<?= $row['user_name'] ?>"

      <p><input type="submit" value="글쓰기"></p>
    </form>

    <form action="search.php" method="post">
      <select name="select[]">
        <!--<option value="name">작성자</option> -->
        <option value="select_title">제목</option>
        <option value="select_contents">내용</option>
      </select>
      <input type="hidden" value="<?php $_POST['search']?>">
      <input type="text" name="search">
      <input type="submit" value="검색" columns="5">
    </form>
  </body>
</html>
