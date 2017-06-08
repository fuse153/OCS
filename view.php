<? 
	session_start(); 
	
	include "db_conn.php";
	
	$sql="select * from board where no=$no";
	
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
    <tr>
    <th>제목</th>
    <th>내용</th>
  </tr></thead><tbody>
  <?php 
  while($rows = mysql_fetch_array($result)){
  	echo" <tr>
  	<td>$rows[title]</td>
  	<td><textarea>$rows[content]</textarea></td>
  	<input type='hidden' name='no' value='$rows[no]' />
  	</tr>
  	";
  }
  ?>
  </tbody>
  </table>
  <br><br>
  	<a href=writing_delete.php?no=<?=$no?>><button class='ui inverted blue button'>글삭제</button></a>
	<a href=modify.php?no=<?=$no?>><button class='ui inverted blue button'>글수정</button></a>
	<a href=list.php><button class='ui inverted blue button'>글 목록</button></a>
	</div>
</body>
</html>