<?php 
	session_start();
	include "db_conn.php";
	

	
	$sql = "delete from board where no=$no";
	mysql_query($sql, $conn);
	mysql_close($conn);
					
	Header("Location:list.php");
					
?>