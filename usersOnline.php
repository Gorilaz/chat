<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once "/home/c/cd51695/public_html/loginform/Db.php";


		$dbh = Db::getConnection();
		$sth = $dbh->query("SELECT * FROM usersOnline");
		$sth->setFetchMode(PDO::FETCH_ASSOC); // режим выборки
		while($row = $sth->fetch()){
			echo  $row['userName']  . ' </div> </br>';
				
		}
		
?>