<doctype html>
<html>
<head>
   <title>Friend List</title>
   <meta charset="UTF-8">
   <style>
@import url(http://fonts.googleapis.com/earlyaccess/notosanscoptic.css);
      body {
            background-image: url('1.png');
            text-align: center;
            color: white;
            font-family: 'Noto Sans Coptic';
            margin: 0;
         }
      img {
         text-align: center;
      }

      span {
         float:left;
      }
   </style>
</head>
<body>
<div id="topbar" style="position:absolute; width:100%; height:100px; background: rgba(255,248,224,0.2);">
   

</div>

<img src="logo.png">
<h1>친구 목록</h1>
   <?php
      $conn = mysql_connect("localhost", "root", "Wogns1001") or die("Error DB!");
      mysql_select_db("hackathon", $conn);

      $result_seoul = mysql_query("select * from user where live = 'Seoul'");
      
      echo "<h2>서울</h2>";
      while($row = mysql_fetch_array($result_seoul)){
        echo $row['id'];
        echo "<br>";
      }
      $result_gyeonggi = mysql_query("select * from user where live = 'Gyeonggi'");
      echo "<h2>경기도</h2>";
      while($row1 = mysql_fetch_array($result_gyeonggi)){
        echo $row1['id'];
        echo "<br>";
      }
      $result_chungcheong = mysql_query("select * from user where live = 'Chungcheong'");
      echo "<h2>충청도</h2>";
      while($row2 = mysql_fetch_array($result_chungcheong)){
        echo $row2['id'];
        echo "<br>";
      }
      $result_gyeongsang =  mysql_query("select * from user where live = 'Gangwon'");
      echo "<h2>강원도</h2>";
      while($row3 = mysql_fetch_array($result_gyeongsang)){
        echo $row3['id'];
        echo "<br>";
      }
      $result_jolla = mysql_query("select * from user where live = 'Jeolla'");
     
      echo "<h2>전라도</h2>";
      while($row4 = mysql_fetch_array($result_jolla)){
        echo $row4['id'];
        echo "<br>";
      }
      $result_jeju = mysql_query("select * from user where live = 'Jeju'");
      echo "<h2>제주도</h2>";
      while($row5 = mysql_fetch_array($result_jeju)){
        echo $row5['id'];
        echo "<br>";
      }
   ?>
</body>
</html>