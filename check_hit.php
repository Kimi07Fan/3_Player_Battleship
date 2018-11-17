<?php 
	$cell = $_GET['cell'];
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
	$result = $mysqli->query("SELECT Ship FROM Board WHERE Positions LIKE \"%$cell%\"");
		if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
						echo $row["Ship"];
					if($row["Ship"] == 0)
						echo "Miss";
					else
						echo "Hit";
					
			}
	// header('Location: play_area.php?id='. $B_id);
?>