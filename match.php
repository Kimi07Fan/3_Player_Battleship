<?php 
	$B1_id = $_GET['id1'];
	$B2_id = $_GET['id2'];
	$B3_id = $_GET['id3'];
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
    sleep(10);
	$mysqli->query("ALTER TABLE Board_" . $B1_id . " RENAME BoardUsing_" . $B1_id);
	$Shots = "Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$Turns = "Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$Board_Using = "BoardComputerUsing_" . $B3_id;
	$check_Using = True;
	$check_Shots = True;
	$check_Turns = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
					{
						echo $row["TABLE_NAME"] . "<br>";
						if($Shots == $row["TABLE_NAME"])
							$check_Shots = False;
						if($Turns == $row["TABLE_NAME"])
							$check_Turns = False;
						if($Board_Using == $row["TABLE_NAME"])
							$check_Using = False;
					}
			}
	if($check_Shots)
		$mysqli->query("CREATE TABLE Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Board int NOT NULL, Cell int NOT NULL, Hits int NOT NULL)");
	if($check_Turns)
	{
		$mysqli->query("CREATE TABLE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Turn int NOT NULL)");
		$mysqli->query("INSERT INTO Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Turn) VALUES ('" . $B1_id . "')");
	}
	if($check_Using)
		$mysqli->query("ALTER TABLE BoardComputer_" . $B3_id . " RENAME BoardComputerUsing_" . $B3_id);
	header('Location: play_area.php?id1='. $B1_id . '&id2=' . $B2_id . '&id3=' . $B3_id);
?>