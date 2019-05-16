<?php
  if($select == title && $search != '') {
  $where = "WHERE {$row['title']} like '$%search%'";
  } elseif($select == contents && $search != '') {
    $where = "WHERE {$row['contents']} like '$%search%'";
  }
?>
