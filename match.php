<?php 
	/*
		This php file connects the two Players and the Computer Board together so that the can play against each other.
		This php file takes the unique Board id as input variables and sends them to both the players so that they both play against each other along with the Commputer
		This php file creates two new Tables which stores the moves played by each of the player and the turn of the player to play the move next
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
	// waits for the other player to completely send his Board to the server before creating the link between them
    sleep(10);
    // Renames the Board name to BoardUsing so as to distinguish between new added players and already playing players
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
						// checks whether the new tables formed are already present with Unique ids reversed
						if($Shots == $row["TABLE_NAME"])
							$check_Shots = False;
						if($Turns == $row["TABLE_NAME"])
							$check_Turns = False;
						// checks whether the computer connected to the players is Renamed
						if($Board_Using == $row["TABLE_NAME"])
							$check_Using = False;
					}
			}
	// Creates the table Shots_<id1>_<id2>_<id3> with <id1>, <id2>, <id3> as unique ids of the players and the computer board, which will stores the moves played by each player as which board it has hitted in which cell and is that cell has a Ship or its empty
	if($check_Shots)
		$mysqli->query("CREATE TABLE Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Board int NOT NULL, Cell int NOT NULL, Hits int NOT NULL)");
	if($check_Turns)
	{
		// Creates the table which stores the id of the board as its turn
		$mysqli->query("CREATE TABLE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Turn int NOT NULL)");
		$mysqli->query("INSERT INTO Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Turn) VALUES ('" . $B1_id . "')");
	}
	// It Renames the Computer id so that no other game will play with the same Computer Board
	if($check_Using)
		$mysqli->query("ALTER TABLE BoardComputer_" . $B3_id . " RENAME BoardComputerUsing_" . $B3_id);
	// Redirects to play_area.php with Player 1, Player 2 and Computer Board ids as variables
	header('Location: play_area.php?id1='. $B1_id . '&id2=' . $B2_id . '&id3=' . $B3_id);
?>