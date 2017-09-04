<?php
    require_once('dbconnect.php');

    // for donation account
    $sql = "SELECT * FROM `accont_for_donation`";
    if(!$result = $dbcon->query($sql)){
      die('There was an error running the query [' . $dbcon->error . ']');
    }
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $accTitle = $row['acc_Title'];
        $accNumber = $row['acc_Number'];
        $bankName = $row['bank_Name'];
      }
    }

    // for general info
    $sql = "SELECT * FROM `info`";
    if (!$result = $dbcon->query($sql)){
      die('There was an error running the query [' . $dbcon->error . ']');
    }
    if ($result->num_rows == 1) {
      while($row = $result->fetch_assoc()) {
        $socialMediaFB = $row['socialMediaFB'];
        $officialno = $row['officialNo'];
        $officialno2 = $row['officialNo2'];
        $auditorium = $row['address'];
        $officialMail = $row['officialMail'];
        $officialMail2 = $row['officialMail2'];
        $tenure = $row['tenure'];
      }
    }

?>
