<?php 
	$jArray = $_POST['hiddenF'];
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
	start:
	$B_id = rand();
	echo $B_id, "<br>";
	$Board = "Board_" . $B_id;
	echo $Board, "<br>";
	$check = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
				$x=0;
					while($row = $result->fetch_assoc())
					{
						// $x=$x+$row["num"];
						echo $row["TABLE_NAME"] . "<br>";
						if($Board == $row["TABLE_NAME"])
							$check = False;
					}
			}
	echo $check, "<br>";
	mysqli_free_result($result);
		if(!$check)
		{
			echo "CAN<br>";
			goto start;
		}
		else
		{
			echo "NOT<br>";
			goto lb;
		}
	lb:
	$mysqli->query("CREATE TABLE Board_" . $B_id ." (Positions int NOT NULL, Ship int NOT NULL)");
	$Array = explode(",", $jArray);
		for ($i=1; $i <= 100; $i++) 
		{
			echo $Array[$i], " ";
			$mysqli->query("INSERT INTO Board_" . $B_id . " (Positions , Ship) VALUES ('" . $i . "' , '" . $Array[$i] . "')");
			if ($i % 10 == 0) {
				echo "<br>";
			}
		}
	echo "WENT";
	header('Location: play_area.php?id='. $B_id);
 ?>