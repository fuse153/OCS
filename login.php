<?  session_start();

include "db_conn.php";

$username = $_GET[username];

$sql = "select * from members where email ='$email'";
$result = mysql_query($sql, $conn);

$num_match = mysql_num_rows($result);

if(!$num_match){
	echo("
	<script>
	window.alert('아이디가 없습니다.')
	history.go(-1)
	</script>
	");
} else {
	$row = mysql_fetch_array($result);
	$db_name = $row[pw];

	if($username != $db_name){
		echo ("	
		<script>
		window.alert('아이디와 패스워드를 다시 확인해주세요.');
		history.go(-1)
		</script>
		");
		exit;
	} else {
		$userid = $row[email];
		$username = $row[name];

		$_SESSION['userid'] = $userid;
		$_SESSION['username'] = $username;

		echo ("
		<script>
		location.href='main.php';
		</script>
		");
	}
}
?>