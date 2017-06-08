<?php 
	include "db_conn.php";
	
	$tel = $tel1.$tel2.$tel3;

	
	$sql = "insert into members(email,pw,name,tel)values('$email','$pw','$name','$tel')";
	mysql_query($sql, $conn);
	mysql_close($conn);
					
	Header("Location:login_form.php");
					
?>