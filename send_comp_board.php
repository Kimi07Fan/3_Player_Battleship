<?php 
	/*
		This php file takes an Array of Board made for the Computer by the Computer Algorithm and sends it to the Database 'Battleship' making a unique id for the Computer board as well which is not part of other Boards present in the Database
	*/
	// $B1_id id the Unique Board id of player 1 who is playing in the playing end
	$B1_id = $_GET['id1'];
	// $B2_id id the Unique Board id of player 2 who is playing in the opponent end
	$B2_id = $_GET['id2'];
	// $jArray takes the Board made by the Computer Algorithm
	$jArray = $_GET['array'];
	// Connection to the Server and Database 'Battleship'
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
	start:
	// $C_id takes a Random number as id
	$C_id = rand();
	$Board = "BoardComputer_" . $C_id;
	$Board_Using = "BoardComputerUsing_" . $C_id;
	$check = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
					{
						// checks whether the Random id created is unique and not present with any other Computer Boards present in the Database
						if($Board == $row["TABLE_NAME"])
							$check = False;
						if($Board_Using == $row["TABLE_NAME"])
							$check = False;
					}
			}
	mysqli_free_result($result);
		if(!$check)
		{
			// If the Random id matches with already present board then the process starts again
			goto start;
		}
		else
		{
			// else if continues with the Random id to create a Board with it in it
			goto lb;
		}
	lb:
	// creates the Board
	$mysqli->query("CREATE TABLE BoardComputer_" . $C_id ." (Positions int NOT NULL, Ship int NOT NULL)");
	// $Array is the final Board Aray to be sent to the server
	$Array = explode(",", $jArray);
		for ($i=1; $i <= 100; $i++) 
		{
			// inserts the Array into the Table created
			$mysqli->query("INSERT INTO BoardComputer_" . $C_id . " (Positions , Ship) VALUES ('" . $i . "' , '" . $Array[$i] . "')");
		}
	// Redirects to play_area.php with Player 1 and Player 2 ids as variables and Random Board id created as variable for Computer Board
	header('Location: play_area.php?id1=' . $B1_id . '&id2=' . $B2_id . '&id3=' . $C_id);
 ?>