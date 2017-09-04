<?php
  /*$username = 'ivcujesu_iamJesu';
$password = 'WeAreJesusPeople@@@2017';
$database = 'ivcujesu_dbivcujesuspeopledbivcujesuspeople';
*/
    $host = 'localhost';
    $username = 'PoG';
    $password = 'MyPhpAdmin';
    $database = 'ibadanvarsitycunifesdatabase';
	  $dbcon = new mysqli($host, $username, $password, $database);
    if($dbcon->connect_errno > 0){
      die('Unable to connect to database [' . $dbcon->connect_error . ']');
	  }
  	else {
  		//echo "connection created successfully";
  	}

?>
