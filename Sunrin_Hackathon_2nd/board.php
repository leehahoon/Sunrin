<html>
<head>
	<title>Board</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="insert.php" method="POST">
<h2>아이템추가</h2>
<table>
	<tr>
		<td>노래제목</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>아티스트</td>
		<td><input type="text" name="artist"></td>
	</tr>
	<tr>
		<td>내용</td>
		<td><textarea name="content" rows="4" cols="50">

		</textarea></td>
	</tr>
	<tr>
		<td>년도</td>
		<td><input type="text" name="year"></td>
	</tr>
	<tr>
		<td>월</td>
		<td>
			<select name="month">
  				<option value="1">1월</option>
 				<option value="2">2월</option>
 				<option value="3">3월</option>
 				<option value="4">4월</option>
 				<option value="5">5월</option>
 				<option value="6">6월</option>
 				<option value="7">7월</option>
 				<option value="8">8월</option>
 				<option value="9">9월</option>
 				<option value="10">10월</option>
 				<option value="11">11월</option>
 				<option value="12">12월</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="글쓰기">
		</td>
	</tr>
</table>
</form>
</body>
</html>