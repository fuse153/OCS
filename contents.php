<!-- contents start -->

		<form action="patient_join.php" method="get">
			<div id="jup">
				<input type="submit" value="ȯ���������" class="ui inverted blue button">&nbsp;&nbsp;&nbsp;
				<input type="reset" value="�ʱ�ȭ" class="ui inverted gray button">&nbsp;&nbsp;&nbsp;
				
			</div>
			<div id="contents">
				<div class="ui vertically divided grid">
					<div class="two column row">
						<div class="column">

			
							<div id="input" class="ui inverted segment">
								<a class="ui red ribbon label">���� ����</a><br>
								<div id="border" class="ui inverted mini form">

									<div class="field">
										<div class="ui label">��Ʈ��ȣ</div>
										<input placeholder="��Ʈ��ȣ" type="text" name="c_num"
										value="<?echo"$c_num"?>" />
									</div>

									<div class="field">
										<div class="ui label">�����ڸ�</div>
										<input placeholder="�����ڸ�" type="text" name="p_name"
										value="<?echo"$p_name"?>">
									</div>

									<div class="field">
										<div class="ui label">�ֹε�Ϲ�ȣ</div>
										<input type="text" placeholder="�ֹε�Ϲ�ȣ" name="d_license"
										value="<?echo"$d_license"?>">
									</div>

									<div class="field">
										<div class="ui label">��������</div>
										<select class="ui dropdown" name="i_kind">
											<option value="���ΰǰ�����">���ΰǰ�����</option>
											<option value="�Ϲ�">�Ϲ�</option>
											<option value="��ȣ1��">��ȣ1��</option>
											<option value="��ȣ2��">��ȣ2��</option>
										</select>
									</div>

								</div>
								<!-- section 1 end -->

								<br> <a class="ui blue ribbon label">���� ����</a><br>
								<div id="border" class="ui inverted mini form">
									<div class="field">
										<div class="ui label">���ü ��ȣ</div>
										<input type="text" placeholder="���ü ��ȣ" name="business"
										value="<?=$business?>" />
									</div>

									<div class="field">
										<div class="ui label">�� �� ȣ</div>
										<input type="text" placeholder="�� �� ȣ" name="q_num"
										value="<?=$q_num?>" />
									</div>

									<div class="field">
										<div class="ui label">�������</div>
										<input type="text" value="9999-12-31" name="acq_date" />
									</div>

									<div class="field">
										<div class="ui label">��������</div>
										<input type="text" value="9999-12-31" name="req_date" />
									</div>



								</div>

								<!-- section 2 end -->

								<br> <a class="ui green ribbon label">��Ÿ����</a><br>
								<div id="border" class="ui inverted mini form">

									<div class="field">
										<div class="ui label">�� �� ��</div>
										<select class="ui dropdown" name="d_office">
											<option value="����">����</option>
											<option value="�ܰ�">�ܰ�</option>
											<option value="�����ܰ�">�����ܰ�</option>
											<option value="�Ű�ܰ�">�Ű�ܰ�</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">����ǻ�</div>
										<select class="ui dropdown" name="doctor">
											<option value="���ǻ�">���ǻ�</option>
											<option value="���ǻ�">���ǻ�</option>
											<option value="ȫ�ǻ�">ȫ�ǻ�</option>
											<option value="���ǻ�">���ǻ�</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">��/����</div>
										<select class="ui dropdown" name="f_s_patient">
											<option value="��ȯ">��ȯ</option>
											<option value="������">������</option>
											<option value="90������">90������</option>
											<option value="����">����</option>
										</select>
									</div>
									<div class="field">
										<div class="ui label">��Ÿ����</div>
										<select class="ui dropdown" name="etc">
											<option value="01(�౹�� ���� ����)">01(�౹�� ���� ����)</option>
											<option value="11(����ȯ��)">11(����ȯ��)</option>
										</select>
									</div>


								</div>

								<!-- section 3 end -->
							</div>



						</div>
						<div class="column">

							<div class="ui top attached tabular menu">
								<a class="item active" data-tab="first">������</a> <a class="item"
									data-tab="second">������</a> 
									<div align="center"><input type="submit" id="delete" value="���� ���" class="ui blue button" /></div>
							</div>
							<div class="ui bottom attached tab segment active"
								data-tab="first">
								<table class="ui selectable inverted table">
									 
									<thead>
										<tr>
											<td><input type="checkbox" id="checkAll" value="check all" /></td>
											<th>����</th>
											<th>��Ʈ��ȣ</th>
											<th>�̸�</th>
											<th>�����</th>
											<th>����ǻ�</th>
											<th>������</th>
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
											<th>����</th>
											<th>��Ʈ��ȣ</th>
											<th>�̸�</th>
											<th>�����</th>
											<th>����ǻ�</th>
											<th>������</th>
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