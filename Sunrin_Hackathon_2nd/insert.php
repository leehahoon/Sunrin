<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php

	echo $_POST['title'];
	echo "<br>";
	echo $_POST['artist'];
	echo "<br>";
	echo $_POST['content'];
	echo "<br>";
	echo $_POST['year'];
	echo "<br>";
	echo $_POST['month'];
	echo "<br>";

	$conn = mysql_connect("localhost", "root", "Wogns1001") or die("Error DB!");
	
	mysql_select_db("hackathon", $conn);
	$a = mysql_query('select * from whoareyou');
	$row = mysql_fetch_array($a);
	$username = $row['name'];

	mysql_query("insert into board (song_title , artist , content , year , month , id) values ('{$_POST['title']}', '{$_POST['artist']}', '{$_POST['content']}', '{$_POST['year']}', '{$_POST['month']}', '{$username}');");

	mysql_close($conn);
?>
<script>
location.href='board.php' 
</script>
</body>
</html>