<?php
session_start ();

include "db_conn.php";
$sql = "select * from jupsu where email='$userid'";

$result = mysql_query ( $sql, $conn );
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="euc-kr">
<title>OCS �������� �ý���</title>
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>

<script>
$(function() {
  $( "#datepicker1" ).datepicker({
    dateFormat: 'yy-mm-dd',
    prevText: '���� ��',
    nextText: '���� ��',
    monthNames: ['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��'],
    monthNamesShort: ['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��'],
    dayNames: ['��','��','ȭ','��','��','��','��'],
    dayNamesShort: ['��','��','ȭ','��','��','��','��'],
    dayNamesMin: ['��','��','ȭ','��','��','��','��'],
    showMonthAfterYear: true,
    changeMonth: true,
    changeYear: true,
    yearSuffix: '��'
  });
});
</script>

<style type="text/css">
* {
	margin: 0px;
}

#body {
	magrin-top: 30px;
}

#contents {
	padding-top: 20px;
	padding-left: 60px;
	padding-right: 600px;
	width: 1920px;
	height: 1180px;
	background-color: #DADADA;
}

	#header {
				width: 1920px;
				height: 200px;
				background-color: black;
			}
</style>
</head>
<body id=body>


	<? include "header.php"; ?> 
		
<form action="main.php">
		<div id="contents">
			<div class="ui big form">

				<div class="field">
					<label>��¥</label> <input placeholder="��¥�Է�" type="text"
						id="datepicker1">
				</div>
				<div class="field">
					<label>��ġ��</label> <input placeholder="��ġ��" type="text">
				</div>	
				<div class="field">
					<label>����</label> <input placeholder="����" type="text">
				</div>
				<br><br>
		</div>
			<center><input type="submit" value="���� ���� ����" class="ui teal button">&nbsp;&nbsp;&nbsp;
			<input type="reset" value="�ʱ�ȭ" class="ui green button"></center>
		</div>

	</form>

</body>
</html>