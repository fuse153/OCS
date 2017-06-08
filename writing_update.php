<?php 
	session_start();
	include "db_conn.php";
	

	
	$sql = "update board set title='$title', content='$content' where no=$no";
	mysql_query($sql, $conn);
	mysql_close($conn);
					
	Header("Location:list.php");
					
?>