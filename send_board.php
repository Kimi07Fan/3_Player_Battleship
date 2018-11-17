<?php 
	$jArray = $_POST['hiddenF'];
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
		if($mysqli->connect_error)
		{
			$mysqli = new mysqli("localhost", "root", "");
			$mysqli->query("CREATE DATABASE Battleship");
			// header('Location: send_board.php');
		}
	$mysqli->query("USE Battleship");
	$mysqli->query("CREATE TABLE Board (Positions int NOT NULL, Ship int NOT NULL)");
	$Array = explode(",", $jArray);
		for ($i=1; $i <= 100; $i++) 
		{
			echo $Array[$i], " ";
			$mysqli->query("INSERT INTO Board (Positions , Ship) VALUES ('" . $i . "' , '" . $Array[$i] . "')");
			if ($i % 10 == 0) {
				echo "<br>";
			}
		}
	// header('Location: ____________________________(Name of the final PLAYING AREA page)_______________________________');
 ?>
