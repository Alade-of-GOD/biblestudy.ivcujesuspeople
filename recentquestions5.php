<?php
  require_once('dbconnect.php');
  $sql = "SELECT * FROM `bible_study_discussion_question_tbl`
          ORDER BY `q_DateTime` DESC LIMIT 1, 5";
  if(!$result = $dbcon->query($sql)){
    die('There was an error running the query [' . $dbcon->error . ']');
  }
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $q = $row['q_Id'];
      $question = $row['q_Question'];
      echo '<li><a href="index.php?pleaser='.$q.'" title="'.$question.'">'.$question.'</a></li>';
    }
  }

?>
