<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

	$conn = mysql_connect("localhost", "root", "Wogns1001") or die("Error DB!");
	
	mysql_select_db("hackathon", $conn);
	$a = mysql_query('select * from user');

	$chk = false;

	while($row = mysql_fetch_array($a)){

 		if($_POST['id']==$row['id'] && $_POST['pw']==$row['pw']){
			echo "<script>alert('성공적으로 로그인이 되었습니다.');</script>";
			$chk = true;
			mysql_query('truncate whoareyou');
			mysql_query("insert into whoareyou value ('{$row['id']}');");
			break;
		}
  
	}
	if(!$chk){
		echo "<script>alert('로그인에 실패했습니다. 다시 시도해주세요.');
		location.href='login.php';</script>";
	}

	mysql_close($conn);
?>
<script>
location.href='index.php' 
</script>
</body>
</html>