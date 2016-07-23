<!doctype html>
<html>
	<script src="js/jquery-3.1.0.min.js"></script>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400italic' rel='stylesheet' type='text/css'>

	<script>
	
		function plus1(){
			
				var oneplus=document.getElementById('relate1').innerHTML;
				
				
				oneplus=parseInt(oneplus);
				oneplus+=1;
				document.getElementById('relate1').innerHTML=String(oneplus);
		}
		function plus2(){
			
				var oneplus=document.getElementById('relate2').innerHTML;
				
				
				oneplus=parseInt(oneplus);
				oneplus+=1;
				document.getElementById('relate2').innerHTML=String(oneplus);
		}
		function plus3(){
			
				var oneplus=document.getElementById('relate3').innerHTML;
				
				
				oneplus=parseInt(oneplus);
				oneplus+=1;
				document.getElementById('relate3').innerHTML=String(oneplus);
		}
			
		
	</script>
<head>
	<meta charset="UTF-8">
</head>
<body>

	<div id="topbar">
	<a href="./mypage.php" style="position:absolute;  left:1%";><img src="./aaa.png" width="100" height="80"></a>
	<img src="img/logo.png" style="position:absolute;  left:41%; z-index:1;">
		
	</div>
	<div id="loginarea" class="col-sm-12"  >
	<br>
		<br><br><br>
		음악으로 세상을 연결하다
		<br><br><br>
		<div style="">
		<a href="./login.php"><img src="img/login.png" style="position:absolute; top:50%; left:25%; width:15%;"></a>
		<a href="./signup.php"><img src="img/register.png" style="position:absolute; top:50%; left:60%; width:15%;"></a>

		</div>
	
	</div>
	<div class="col-sm-12 top3">
	
		<div class="top3rank">
		#1
		<?php
			$conn = mysql_connect("localhost", "root", "Wogns1001") or die("Error DB!");
			mysql_select_db("hackathon", $conn);
			$a = mysql_query('select * from board');
			$row = mysql_fetch_array($a);
			
		
		
		echo "</div>";
		echo "<div class='title'>";
			echo $row['song_title'];
		echo "</div>";
		echo "<div class='artist'>";
			echo $row['artist'];
		echo "</div>";
		echo "<div class='content'>";
			echo $row['content'];
		echo "</div>";
		?>
	
	</div>
	<div class="col-sm-12 feeling">
		<img src="img/heart.png" style="height:60px;"> <span class="feels" id="relate1">23</span>  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus1()">공감</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="feels" onclick="plus1()">감동</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus1()">실연</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus1()">낭만</span>
	</div>
	<div class="col-sm-12 top3">
	
		
		<div class="top3rank">
		#2
		<?php
			$row = mysql_fetch_array($a);
		echo "</div>";
		echo "<div class='title'>";
			echo $row['song_title'];
		echo "</div>";
		echo "<div class='artist'>";
			echo $row['artist'];
		echo "</div>";
		echo "<div class='content'>";
			echo $row['content'];
		echo "</div>";
		?>
	
	</div>
	<div class="col-sm-12 feeling">
		<img src="img/heart.png" style="height:60px;"> <span class="feels" id="relate2">18</span>  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus2()">공감</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="feels" onclick="plus2()">감동</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus2()">실연</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus2()">낭만</span>
	</div>
	<div class="col-sm-12 top3">
	
		<div class="top3rank">
		#3
		
		<?php
			$row = mysql_fetch_array($a);
		echo "</div>";
		echo "<div class='title'>";
			echo $row['song_title'];
		echo "</div>";
		echo "<div class='artist'>";
			echo $row['artist'];
		echo "</div>";
		echo "<div class='content'>";
			echo $row['content'];
		echo "</div>";
		?>
	
	</div>
	<div class="col-sm-12 feeling">
		<img src="img/heart.png" style="height:60px;"> <span class="feels" id="relate3">10</span>  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus3()">공감</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="feels" onclick="plus3()">감동</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus3()">실연</span> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="feels" onclick="plus3()">낭만</span>
	</div>
	<div class="col-sm-12 top10">
		너 그리고 나
		<span class="top10rank">
		#4
		</span>
		<div class="title">
			
		</div>

	</div>
	<div class="col-sm-12 top10">
		<span class="top10rank">
			#5
		</span>
		Why so Lonely
		<div class="title">
			
		</div>
	</div>
	<div class="col-sm-12 top10">
		Day Day
		<span class="top10rank">
		#6
		</span>
		<div class="title">
			
		</div>
	</div>
	<div class="col-sm-12 top10">
		밀지마
		<span class="top10rank">
		#7
		</span>
		<div class="title">
			
		</div>
	</div>
	<div class="col-sm-12 top10">
		Forever
		<span class="top10rank">
		#8
		</span>
		<div class="title">
			
		</div>
	</div>
	<div class="col-sm-12 top10">
		I Like That
		<span class="top10rank">
		#9
		</span>
		<div class="title">
			
		</div>
	</div>
	<div class="col-sm-12 top10">
		널 사랑하지 않아
		<span class="top10rank">
		#10
		</span>
		<div class="title">
			
		</div>
	</div>
</body>
</html>