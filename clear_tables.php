<?php 
	/*
		This php file Deletes all the Tables related to this game so that the Database is not crowded
	*/
	// $B1_id takes the player 1's Unique Board id
	$B1_id = $_GET['id1'];
	// $B2_id takes the player 2's Unique Board id
	$B2_id = $_GET['id2'];
	// $B3_id takes the Computer's Unique Board id
	$B3_id = $_GET['id3'];
	// Connection to the Server and Database 'Battleship'
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
	// Deletes the Board Tables containing the Board of the two players as well as the Computer Board
	$mysqli->query("DROP TABLE BoardUsing_" . $B1_id);
	$mysqli->query("DROP TABLE BoardUsing_" . $B2_id);
	$mysqli->query("DROP TABLE BoardComputerUsing_" . $B3_id);
	$Shots = "Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$Turns = "Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$Lost = "Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$check_Shots = True;
	$check_Turns = True;
	$check_Lost = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
					{
						// checks for the presence of the Shots Table, the Turns Table and the Lost Tables
						if($Shots == $row["TABLE_NAME"])
							$check_Shots = False;
						if($Turns == $row["TABLE_NAME"])
							$check_Turns = False;
						if($Lost == $row["TABLE_NAME"])
							$check_Lost = False;
					}
			}
	// checks which arrangement of Shots Table is present in the Database and Deletes it
	if($check_Shots)
	{
		$mysqli->query("DROP TABLE Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
	}
	else
	{
		$mysqli->query("DROP TABLE Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
	}
	// checks which arrangement of Turns Table is present in the Database and Deletes it
	if($check_Turns)
	{
		$mysqli->query("DROP TABLE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
	}
	else
	{
		$mysqli->query("DROP TABLE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
	}
	// checks which arrangement of Lost Table is present in the Database and Deletes it
	if($check_Lost)
	{
		$mysqli->query("DROP TABLE Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
	}
	else
	{
		$mysqli->query("DROP TABLE Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
	}
	// Redirects to index.php to restart the game
	header('Location: index.php');
?>