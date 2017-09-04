<?php
  require_once('../../../../ivcujesuspeople.org/dbconnect.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['questy']) && !empty($_POST['questy']) && isset($_POST['quester']) && !empty($_POST['quester'])){
    $questy = $_POST['questy'];
    $quester = $_POST['quester'];
    $time = time();
    $d = date("Y-m-d");
    $t = date("H:i:s", $time-3600);
    $datetime = $d." ".$t;
    $insert = "INSERT INTO `bible_study_discussion_question_tbl` (q_Owner, q_Question, q_DateTime)
    VALUES ('".mysqli_real_escape_string($dbcon, $quester)."', '".mysqli_real_escape_string($dbcon, $questy)."'
          , '".mysqli_real_escape_string($dbcon, $datetime)."')";
    if(!$res = $dbcon->query($insert)){
      $dbcon->close();
      header('Location: index.php?res=failed#box');
    }
    else {
      $dbcon->close();
      header('Location: index.php?res=success#box');
    }

  }
?>
