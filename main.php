<?php
session_start ();

include "db_conn.php";
	$sql="select * from jupsu where email='$userid'";

	$result = mysql_query ( $sql, $conn );
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="euc-kr">
<title>OCS �������� �ý���</title>
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
			
			#main {
				width: 1920px;
				height: 1080px;
			}
			
			#header {
				width: 1920px;
				height: 200px;
				background-color: black;
			}
			
			#contents {
				padding-top: 20px;
				padding-left: 60px;
				padding-right: 600px;
				width: 1920px;
				height: 1180px;
				background-color: #DADADA;
			}

		
			
			#input {
				width: 500px;
				height: 1050px;
			}
			
			#border {
				border: solid pink 1px;
				padding: 10px;
			}
			
			#jup {
				padding-left: 300px;
				width: 1920px;
				height: 50px;
				background-color: black;
			}
</style>

<script type="text/javascript">
$(function(){ 
	$("#listButton").click(function(){
		var text = $("#p_name").val();  
		if(!text){}
		else{
			$.ajax({ type: 'post' , url: 'p_list.php?p_name='+text+'' , 
			  dataType : 'html' , success: function(data) 
			{ $("#listDiv").html(data); } });	
		}
		})	

	$("#listButton2").click(function(){
			$.ajax({ type: 'post' , url: 'p_list.php' , 
			  dataType : 'html' , success: function(data) 
			{ $("#listDiv").html(data); } });	})	
	$("#reservation").click(function(){
		location.href="reservation.php";
	})	

	



	$("#delete").click(
			function(){
				if($('input:checkbox[name="delete_c_num[]"]:checked').length == 0){
					alert("������ �׸��� �������ּ���.");
					return false;
				}
				else{
					var result = confirm("���� ���� �Ͻðڽ��ϱ�?");

					if(result)
					$('#delete_submit').submit();

					else
						return false;
				}
		});

	$("#checkAll").click(function(){
	if($('input:checkbox[name="delete_c_num[]"]:checked').length == 0){
		$("input[name='delete_c_num[]']:checkbox").each(function(){
		$(this).attr("checked", true);
		});
	}
	else{
		$("input[name='delete_c_num[]']:checkbox").each(function(){
				$(this).attr("checked", false);
		});
		}
	});	

	

})

</script>

</head>
<body>


	
		
		<? include "header.php"; ?> 

		<? 
		if(!$userid)
			include "intro_contents.php";
		else
			include "contents.php";
			
		
		?> 
			
		

		<!-- Modal start -->
		<div class="ui modal">
			<i class="close icon"></i>
			<div class="header">
				ȯ�� ��ȸ &nbsp;&nbsp;&nbsp;
					<div class="ui icon input">
						<input type="text" placeholder="Search..." id="p_name" > 
					</div>
						&nbsp;&nbsp;&nbsp; 
						<input type="button" id="listButton" value="�˻�"
						class="ui orange button" />&nbsp;&nbsp;&nbsp; 
						<input type="button"  id="listButton2" value="��ü�˻�"
						class="ui blue button" />&nbsp;&nbsp;&nbsp; 
			</div>
			<div class="image content">

				<div class="description">
					<div class="ui header">ȯ������ ����Ʈ</div>
					<div id="listDiv"></div> 

				
				</div>
			</div>

		</div>
		<!-- Modal end -->


	<script>
			$('#men').click(function(){
		
			$('.ui.sidebar')
			  .sidebar('toggle');
			})
	
		
			$('.menu .item').tab();

			$('#modal').click(function(){
			$('.ui.modal')
			  .modal('show');
			  })

	</script>
	
	<?php
	mysql_close ( $conn );
	?>
</body>
</html>