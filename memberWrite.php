

<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'dobbi';
		$pw = '1234';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['signup_email'];
	    $member_pw = $_POST['signup_password'];
	    $member_name = $_POST['signup_username'];

		$sql = "insert into member (
				member_email,
				member_pw,
				member_name
		)";
		
		$sql = $sql. "values (
				'$member_email',
				'$member_pw',
				'$member_name'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입에 성공하셨습니다.")</script>'; 
		}else{ 
		  echo '<script>alert("회원가입에 실패하셨습니다.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "index.html";
</script>

</html>