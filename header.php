		<div id="header">
				<div class="ui container">

					<div class="ui large secondary inverted pointing menu">
						<a class="active item" href="main.php">OCS</a> 
						
						
						<div class="right item">
							<?php
							if (! $userid) {
								?>
								<a href="login_form.php" class="ui inverted button">�α���</a>&nbsp;&nbsp;&nbsp;
							<a href="member_join.php" class="ui inverted button">ȸ������</a>&nbsp;&nbsp;&nbsp;
								<?php
							} else {
								?>
							   	<?echo"<a class='ui big gray label'>$username</a>���� ������ ȯ���մϴ�."?>&nbsp;&nbsp;&nbsp; 
								<a href="logout.php" class="ui inverted button">�α׾ƿ�</a>&nbsp;&nbsp;&nbsp;
							<? } ?> 
						</div>
					</div>
					<?php 
							if (! $userid) {}
							else{?>
								<button id = "modal" class="ui inverted green button">ȯ����ȸ</button>&nbsp;&nbsp;&nbsp;
								<a href="main.php"><button id = "reservation" class="ui inverted red button">ȯ������</button></a>&nbsp;&nbsp;&nbsp;
								<a href="reservation.php"><button id = "reservation" class="ui inverted orange button">����</button></a>&nbsp;&nbsp;&nbsp;
								<a href="list.php"><button class="ui inverted blue button">�Խ���</button></a>&nbsp;&nbsp;&nbsp;
							<?php }
							?>
							</div>
				<!-- container end -->
			</div>
			<!-- header end -->
