
<?php
  include "dbconnect.php";
  $sql = "SELECT * FROM member LEFT JOIN board
          ON member.id = board.id";
  $result = mysqli_query($conn, $sql);
  var_dump($id);
  var_dump($_POST['$id']);

  $list = '';
  while($row = mysqli_fetch_array($result)){
    if($row['user_id'] == $_POST['$id']) {
       $list .= "<a href=\"update.php?title={$row['title']}\">{$row['title']}</a><br>";

    }
  }
var_dump($row['name']);

  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?$row['name'] ?>님의 블로그</title>
        <!--name으로 대체할 예정-->
  </head>
  <body>
    <h1><?$row['name'] ?>의 블로그</h1>
    <!--name으로 대체할 예정-->

      <?=$list?>

    <form action = "create.php" method="post">
      <p><input type="submit" name="create" value="글쓰기"></p>
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
