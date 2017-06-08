<!-- contents start -->

		<form action="patient_join.php" method="get">
			<div id="jup">
				<input type="submit" value="환자정보등록" class="ui inverted blue button">&nbsp;&nbsp;&nbsp;
				<input type="reset" value="초기화" class="ui inverted gray button">&nbsp;&nbsp;&nbsp;
				
			</div>
			<div id="contents">
				<div class="ui vertically divided grid">
					<div class="two column row">
						<div class="column">

			
							<div id="input" class="ui inverted segment">
								<a class="ui red ribbon label">인적 정보</a><br>
								<div id="border" class="ui inverted mini form">

									<div class="field">
										<div class="ui label">차트번호</div>
										<input placeholder="차트번호" type="text" name="c_num"
										value="<?echo"$c_num"?>" />
									</div>

									<div class="field">
										<div class="ui label">수신자명</div>
										<input placeholder="수신자명" type="text" name="p_name"
										value="<?echo"$p_name"?>">
									</div>

									<div class="field">
										<div class="ui label">주민등록번호</div>
										<input type="text" placeholder="주민등록번호" name="d_license"
										value="<?echo"$d_license"?>">
									</div>

									<div class="field">
										<div class="ui label">보험유형</div>
										<select class="ui dropdown" name="i_kind">
											<option value="국민건강보험">국민건강보험</option>
											<option value="일반">일반</option>
											<option value="보호1종">보호1종</option>
											<option value="보호2종">보호2종</option>
										</select>
									</div>

								</div>
								<!-- section 1 end -->

								<br> <a class="ui blue ribbon label">보험 정보</a><br>
								<div id="border" class="ui inverted mini form">
									<div class="field">
										<div class="ui label">사업체 기호</div>
										<input type="text" placeholder="사업체 기호" name="business"
										value="<?=$business?>" />
									</div>

									<div class="field">
										<div class="ui label">증 번 호</div>
										<input type="text" placeholder="증 번 호" name="q_num"
										value="<?=$q_num?>" />
									</div>

									<div class="field">
										<div class="ui label">취득일자</div>
										<input type="text" value="9999-12-31" name="acq_date" />
									</div>

									<div class="field">
										<div class="ui label">만기일자</div>
										<input type="text" value="9999-12-31" name="req_date" />
									</div>



								</div>

								<!-- section 2 end -->

								<br> <a class="ui green ribbon label">기타정보</a><br>
								<div id="border" class="ui inverted mini form">

									<div class="field">
										<div class="ui label">진 료 실</div>
										<select class="ui dropdown" name="d_office">
											<option value="내과">내과</option>
											<option value="외과">외과</option>
											<option value="정형외과">정형외과</option>
											<option value="신경외과">신경외과</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">담당의사</div>
										<select class="ui dropdown" name="doctor">
											<option value="나의사">나의사</option>
											<option value="너의사">너의사</option>
											<option value="홍의사">홍의사</option>
											<option value="박의사">박의사</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">초/재진</div>
										<select class="ui dropdown" name="f_s_patient">
											<option value="신환">신환</option>
											<option value="과초진">과초진</option>
											<option value="90일초진">90일초진</option>
											<option value="재진">재진</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">기타정보</div>
										<select class="ui dropdown" name="etc">
											<option value="01(약국이 없는 지역)">01(약국이 없는 지역)</option>
											<option value="11(응급환자)">11(응급환자)</option>
										</select>
									</div>


								</div>

								<!-- section 3 end -->
							</div>



						</div>
						<div class="column">

							<div class="ui top attached tabular menu">
								<a class="item active" data-tab="first">진료대기</a> <a class="item"
									data-tab="second">예약대기</a> 
									<div align="center"><input type="submit" id="delete" value="접수 취소" class="ui blue button" /></div>
							</div>
							<div class="ui bottom attached tab segment active"
								data-tab="first">
								<table class="ui selectable inverted table">
									 
									<thead>
										<tr>
											<td><input type="checkbox" id="checkAll" value="check all" /></td>
											<th>순번</th>
											<th>차트번호</th>
											<th>이름</th>
											<th>진료과</th>
											<th>담당의사</th>
											<th>초재진</th>
										</tr>
									</thead>
									<tbody>
									
									<?
									
									
									while($rows = mysql_fetch_array($result)){
									echo" <tr>
											<td><input type ='checkbox' name='delete_c_num[]' value='$rows[c_num]'></td>
											<td>$rows[no]</td>
											<td>$rows[c_num]</td>
											<td>$rows[p_name]</td>
											<td>$rows[d_office]</td>
											<td>$rows[doctor]</td>
											<td>$rows[f_s_patient]</td>
										</tr>
										";
									}
									?>
									</tbody>
								</table>

							</div>
							<div class="ui bottom attached tab segment" data-tab="second">
								<table class="ui selectable inverted table">

									<thead>
										<tr>
											<th>순번</th>
											<th>차트번호</th>
											<th>이름</th>
											<th>진료과</th>
											<th>담당의사</th>
											<th>초재진</th>
										</tr>
									</thead>
									<tbody>
								
									</tbody>
								</table>

							</div>
							
						</div>
					</div>
				</div>

			</div>
		</form>

		<!-- contents end -->