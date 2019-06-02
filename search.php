<?php
  session_start();
  //$user_id = $_SESSION['user_id'];
  $mem_id = $_SESSION['mem_id'];
  include "dbconnect.php";
  $select = $_POST['select'];
  $search = $_POST['search'];

  if($select == "select_title") {
    $sql = "SELECT * FROM board
            WHERE mem_id = '$mem_id'
            AND title LIKE '%$search%'";
            /*user_id == 'test1' and*/
  } elseif($select == "select_contents") {
    $sql = "SELECT * FROM board
            WHERE mem_id = '$mem_id'
            AND contents LIKE '%$search%'";
  }
  $result = mysqli_query($conn, $sql);

   $list='';
   while($row=mysqli_fetch_array($result)) {
      $list .= "<tr><td><a href=\"update.php?title={$row['title']}\">{$row['title']}</a></td>
               <td>{$row['created']}</td></tr>";
     }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$_SESSION['user_name'] ?>님의 블로그</title>
    <style>
    #center {margin-top:100px; }
      a { text-decoration: none;}
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
      <div id="center">
      <?php
        if(empty($list)) {
          echo "<script>alert('검색결과가 없습니다.'); history.back();</script>";
        } else { ?>
          <table>
            <tr>
              <td>글제목</td>
              <td>작성일</td>
            </tr>
               <?= $list; ?>
          </table>
          <p><button onclick="history.back()">돌아가기</button></p>
        </div>
        </body>
      <?php } ?>
</html>
