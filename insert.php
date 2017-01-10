<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once "/home/c/cd51695/public_html/loginform/Db.php";
include_once "smile.php";

	
	if(isset($_POST['message']))
	{
		$text = $_POST['message'];
		$userName = $_SESSION['userName'];
		$date = date("Y-m-d H:i:s");
		Smilify($text);
	
	
		//тогда добавляем в базу
		$dbh = Db::getConnection();
		$stm = $dbh->prepare("INSERT INTO logsChatBox ( userName, msg, date ) values( :userName, :msg, :date)");
		$res = $stm->execute(array('userName'=>$userName, 'msg'=>$text, 'date'=>$date));
		
		echo $text;
		
	}
	else{
		echo "Заполните все поля";
	}


?>