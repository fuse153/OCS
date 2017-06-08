<? 
	session_start(); 
	
	include "db_conn.php";
	
	$sql="select * from board where email='$userid'";
	
	$result = mysql_query ( $sql, $conn );
	
	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="euc-kr">
<title>OCS 병원정보 시스템</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>

<style>
			* {
				margin: 0px;
			}
			
		
			
			#header {
				width: 1920px;
				height: 200px;
				background-color: black;
			}
	

		
			
		
</style>
</head>
<body>
	<? include "header.php"; ?> 
<div class="ui container">
<table class="ui selectable yellow table">
  <thead>
    <tr><th>번호</th>
    <th>아이디</th>
    <th>제목</th>
  </tr></thead><tbody>
  <?php 
   	while($rows = mysql_fetch_array($result)){
									echo" <tr>
											<td>$rows[no]</td>
											<td>$userid</td>
											<td><a href='view.php?no=$rows[no]'>$rows[title]</a></td>
												
										</tr>
										";
									}
									?>
  </tbody>
  </table>
  <br><br>
  	<center><a href="write.php"><button class="ui inverted blue button">글쓰기</button></a>&nbsp;&nbsp;&nbsp;</center>
</body>
</html>