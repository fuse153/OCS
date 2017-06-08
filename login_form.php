<?
session_start();
?>

<html>
<head><title> title </title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
  
</head>
<style>
		body {
			background-color: black;
			padding-top: 150px;
			padding-left: 600px;
		}
		
		#login {
			width: 600px;
			height: 300px;
		}
</style>
<body>
<form action="login.php" method="get">
<div class="ui container">
<div id = login class="ui inverted segment">
	<div class="ui inverted huge form">
   
      <div class="field">
        <label>member email</label>
        <input placeholder="email" type="text" name="email"/>
      </div><br>
      <div class="field">
        <label>Password</label>
        <input placeholder="password" type="password" name="username"/>
      </div>
   
    <br>
   	<input type="submit" value="로그인" class="ui big inverted green button">&nbsp;&nbsp;&nbsp;
	<input type="reset" value="재입력" class="ui big inverted teal button">
					
  </div>
</div>
</div>
</form>
</body>
</html>