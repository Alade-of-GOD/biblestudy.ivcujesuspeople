<?php
  require_once('../dbconnect.php');
  $count = $dbcon->query("SELECT COUNT(`listnum`) as c FROM `bible_study_outlines_tbl`");
  $row = $count->fetch_assoc();
  $c = $row['c'];
  echo $c;
?>
