<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	echo $_POST['id'];
	$conn = mysql_connect("localhost", "root", "Wogns1001") or die("Error DB!");
	
	mysql_select_db("hackathon", $conn);

	mysql_query("insert into user values ('{$_POST['id']}', '{$_POST['passwd']}', '{$_POST['live']}', '{$_POST['born_year']}', 0);");

	mysql_close($conn);

?>
<script>
alert("회원가입이 성공적으로 이루어졌습니다.");
location.href='login.php' 
</script>
</body>
</html>