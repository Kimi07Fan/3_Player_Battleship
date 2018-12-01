<html>
<head>
<title>Three Player Battleship</title>
<style>
    body {
        margin:0;
    }
    .image {
        position: absolute;
        width:100%;
        height:100%;
        background:green;
        background-image:url('Homepage.png');
        background-size:cover;
    }
    .play_button{
        position: absolute;
        left: 580px;
        top: 200px;
    }
    .htp_button{
        position: absolute;
        top: 310px;
        left: 630px;
    }
</style>
</head>
<body bgcolor = "black">
<div class = "image"></div>
	<?php
		$mysqli = new mysqli("localhost", "root", "", "Battleship");
			if($mysqli->connect_error)
			{
				$mysqli = new mysqli("localhost", "root", "");
				$mysqli->query("CREATE DATABASE Battleship");
				header('Location: index.php');
			}
		$mysqli->query("USE Battleship");
	?>
<center>
<font color = "red">
</font>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method = "get" action = "setup.html" class = "play_button">
<!--input type = "submit" name = "Play!" value = "Play!" height "20px" width = "500px" color = "black"-->
<input type = "image" src = "Play_button.jpeg" alt = "submit" height = "100" width = "300">
</form>
<form method = "get" action = "htp.html" class = "htp_button">
<input type = "image" src = "How_to_play.png" alt = "submit" height = "100" width = "200">
</form>
<center>
</body>
</html>
