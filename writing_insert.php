<?php 
	session_start();
	include "db_conn.php";
	

	
	$sql = "insert into board(title,content,email)values('$title','$content','$userid')";
	mysql_query($sql, $conn);
	mysql_close($conn);
					
	Header("Location:list.php");
					
?>