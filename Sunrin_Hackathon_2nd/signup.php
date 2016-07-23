<doctype html>
<html>
<head>
		<title>Sign up</title>
		<meta charset="UTF-8">
		<style>
			body {
				background-image: url('1.png');
				text-align: center;
			}

			form {
				text-align: center;
			}
			div {
				text-align: center;
			}
		</style>
</head>
<body>
		<form name = "join" method = "post" action = "memberSave.php">
		<h1>회원가입</h1>
		<div>
		<table>
			<tr>
				<td>아이디</td>
				<td><input type = "text" name = "id"></td>
			</tr>
			<tr>
				<td>비밀번호</td>
				<td><input type = "password" name = "passwd"></td>
			</tr>
			<tr>
				<td>사는지역</td>
				<td>
					<select name="live">
  						<option value="Seoul">서울</option>
 						<option value="Gyeonggi">경기도</option>
 						<option value="Chungcheong">충청도</option>
 						<option value="Gangwon">강원도</option>
 						<option value="Jeolla">전라도</option>
 						<option value="Jeju">제주도</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>출생년도</td>
				<td>
					<select name="born_year">
  						<option value="70">70년대</option>
 						<option value="80">80년대</option>
 						<option value="90">90년대</option>
 						<option value="00">00년대</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type = "submit" value = "회원가입"></td>
			</tr>
			</table>
			</div>
		</form>
	</table>
</body>
</html>