<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
</head>
<body>
<h1>로그인</h1>
<form action="login_ok.php" method="POST">
<table>
	<tr>
		<td>아이디</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>비밀번호</td>
		<td><input type="text" name="pw"></td>
	</tr>
	<tr>
		<td><input type="submit" value="로그인"></td>
		<td><input type="button" value="회원가입" onclick="location.href='./signup.php'"></td>
	</tr>
</table>
</form>
</body>
</html>