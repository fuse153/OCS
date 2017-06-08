<?php
session_start ();

include "db_conn.php";
if (! $p_name) {
	$sql = "select * from p_info where email='$userid'";
} else {
	$sql = "select * from p_info where p_name like '$p_name%' and email='$userid' ";
}
$result = mysql_query ( $sql, $conn );

?>
<meta charset="euc-kr">


<table class="ui selectable inverted green table">
						<thead>
							<tr>
								<th>선택</th>
								<th>차트번호</th>
								<th>이름</th>
								<th>주민등록번호</th>
								<th>보험유형</th>
							</tr>
						</thead>
						<tbody>
							
								<?php
								
								while ( $rows = mysql_fetch_array ( $result ) ) {
									echo "<tr>
										<td><a href='main.php?c_num=$rows[c_num]&p_name=$rows[p_name]&d_license=$rows[d_license]&business=$rows[business]&q_num=$rows[q_num]'>선택</a></td>			
											<td>$rows[c_num]</td>
											<td>$rows[p_name]</td>
											<td>$rows[d_license]</td>
											<td>$rows[i_kind]</td>
										</tr>
										";
								}
								
								?>
							
							  </tbody>
</table>

<script>

			</script>
