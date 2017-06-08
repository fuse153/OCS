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
<title>OCS 병원정보 시스템</title>
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
    prevText: '이전 달',
    nextText: '다음 달',
    monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
    monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
    dayNames: ['일','월','화','수','목','금','토'],
    dayNamesShort: ['일','월','화','수','목','금','토'],
    dayNamesMin: ['일','월','화','수','목','금','토'],
    showMonthAfterYear: true,
    changeMonth: true,
    changeYear: true,
    yearSuffix: '년'
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
					<label>날짜</label> <input placeholder="날짜입력" type="text"
						id="datepicker1">
				</div>
				<div class="field">
					<label>주치의</label> <input placeholder="주치의" type="text">
				</div>	
				<div class="field">
					<label>과목</label> <input placeholder="과목" type="text">
				</div>
				<br><br>
		</div>
			<center><input type="submit" value="예약 정보 전송" class="ui teal button">&nbsp;&nbsp;&nbsp;
			<input type="reset" value="초기화" class="ui green button"></center>
		</div>

	</form>

</body>
</html>