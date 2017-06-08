		<div id="header">
				<div class="ui container">

					<div class="ui large secondary inverted pointing menu">
						<a class="active item" href="main.php">OCS</a> 
						
						
						<div class="right item">
							<?php
							if (! $userid) {
								?>
								<a href="login_form.php" class="ui inverted button">로그인</a>&nbsp;&nbsp;&nbsp;
							<a href="member_join.php" class="ui inverted button">회원가입</a>&nbsp;&nbsp;&nbsp;
								<?php
							} else {
								?>
							   	<?echo"<a class='ui big gray label'>$username</a>님의 접속을 환영합니다."?>&nbsp;&nbsp;&nbsp; 
								<a href="logout.php" class="ui inverted button">로그아웃</a>&nbsp;&nbsp;&nbsp;
							<? } ?> 
						</div>
					</div>
					<?php 
							if (! $userid) {}
							else{?>
								<button id = "modal" class="ui inverted green button">환자조회</button>&nbsp;&nbsp;&nbsp;
								<a href="main.php"><button id = "reservation" class="ui inverted red button">환자접수</button></a>&nbsp;&nbsp;&nbsp;
								<a href="reservation.php"><button id = "reservation" class="ui inverted orange button">예약</button></a>&nbsp;&nbsp;&nbsp;
								<a href="list.php"><button class="ui inverted blue button">게시판</button></a>&nbsp;&nbsp;&nbsp;
							<?php }
							?>
							</div>
				<!-- container end -->
			</div>
			<!-- header end -->
