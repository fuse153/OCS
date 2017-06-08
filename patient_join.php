<?php 

	session_start();
	
	include "db_conn.php";
	$delete_c_num = $_GET ["delete_c_num"];

	if(!$delete_c_num){
	$sql = "insert into p_info(c_num,p_name,d_license,i_kind,business,q_num,acq_date,req_date,d_office,doctor,f_s_patient,etc,email)";
	$sql.= "values($c_num,'$p_name','$d_license','$i_kind','$business', '$q_num' ,'$acq_date','$req_date','$d_office','$doctor','$f_s_patient','$etc','$userid')";
	mysql_query($sql, $conn);

	$sql = "insert into jupsu(c_num,p_name,d_office,doctor,f_s_patient,email)";
	$sql.= "values($c_num,'$p_name','$d_office','$doctor','$f_s_patient','$userid')";
	mysql_query($sql, $conn);
	

	}
	else {
		for($i = 0; $i < count ( $delete_c_num ); $i ++) {
			
			$sql_delete = "delete from jupsu where c_num = '$delete_c_num[$i]'";
			mysql_query ( $sql_delete , $conn);
		}
		$sql = "ALTER TABLE jupsu AUTO_INCREMENT=1";
		mysql_query ( $sql , $conn);
		 
	}
	mysql_close($conn);
	Header("Location:main.php");
					
?>