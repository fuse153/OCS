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
<form class="ui form" action = "writing_insert.php" >
<table class="ui selectable yellow table">
  <thead>
    <tr>
    <th>제목</th>
    <th>내용</th>
  </tr></thead><tbody>
    <tr>
      <td><input type="text" name="title" /></td>
      <td><textarea rows="30" cols="30" name="content" ></textarea></td>
    </tr>
  
    
  </tbody>
  </table>
  <br><br><br>
  	<center><input type="submit" class="ui inverted blue button" value="글 등록">&nbsp;&nbsp;&nbsp;
  			<input type="reset" class="ui inverted red button" value="초기화">&nbsp;&nbsp;&nbsp;
  	</center>
  	</form>
  			<br><center><a href=list.php><button class='ui inverted blue button'>글 목록</button></a></center>
  	</div>
</body>
</html>