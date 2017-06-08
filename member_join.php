<!DOCTYPE html>
<html>
<head>
<meta charset="euc-kr">
<title>Insert title here</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
<style type="text/css">

	body {
			background-color: black;
			padding-top: 150px;
			padding-left: 600px;
		}

#form {
	width: 700px;
	height: 600px;
}
</style>

</head>
<body>
	<form action=member_process.php method=get>

		<div id="form" class="ui column grid">
			<div class="column">
				<div class="ui raised segment">
					<a class="ui massive red ribbon label">회원가입</a>
					<div class="ui inverted segment">
						<div class="ui inverted big form">
							<div class="fields">
								<div class="twelve wide field">
									<label>email</label> <input type="text" name="email">
								</div>
							</div>
							<div class="fields">
								<div class="twelve wide field">
									<label>password</label> <input type="password" name="pw">
								</div>
							</div>
							<div class="fields">
								<div class="twelve wide field">
									<label>고객이름</label> <input type="text" name="name">
								</div>
							</div>
							<div class="fields">
								<div class="twelve wide field">
								  <label>Phone Number</label>
									<div class="ui form">
									  <div class="inline fields">
									    <div class="field">
									      <input type="text" name="tel1" placeholder="(xxx)">
									    </div>
									    <div class="field">
									      <input type="text" name="tel2" placeholder="xxx">
									    </div>
									    <div class="field">
									      <input type="text" name="tel3" placeholder="xxxx">
									    </div>
									  </div>
									</div>
								</div>
							</div>
				
							<div class="ui inverted segment">
								<input type="submit" value="가입하기"
									class="ui inverted massive pink button">&nbsp;&nbsp;&nbsp; <input
									type="reset" value="재입력"
									class="ui inverted massive orange button">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</form>
	<br>


</body>
</html>