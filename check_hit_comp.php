<?php 
	/*
		This php file checks the move played by the computer on other player board whether it is a hit or a miss.
		This php file stores the move to the corresponding connected table that stores all its moves and changes the Turn variable to the next player in the queue
	*/
	// $cell takes the cell number as input to which the computer has made a move
	$cell = $_GET['cell'];
	// $B1_id takes the player 1's Unique Board id
	$B1_id = $_GET['id1'];
	// $B2_id takes the player 2's Unique Board id
	$B2_id = $_GET['id2'];
	// $B3_id takes the Computer's Unique Board id
	$B3_id = $_GET['id3'];
	// $B takes input the Board to which the move is being played
	$B = $_GET['B'];
	// Connection to the Server and Database 'Battleship'
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
		// checks according to $B input whether the move was a hit or a miss by comparing it with the existing Board cell values
		if($B == 1)
			$result = $mysqli->query("SELECT Ship FROM BoardUsing_" . $B1_id . " WHERE Positions LIKE \"%$cell%\"");
		if($B == 2)
			$result = $mysqli->query("SELECT Ship FROM BoardUsing_" . $B2_id . " WHERE Positions LIKE \"%$cell%\"");
		if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
					// Miss moves takes value '0' and hit takes the value of the size of the ship
					if($row["Ship"] == 0)
						$h_or_m = 0;
					else
						$h_or_m = $row["Ship"];
					
			}
	$Shots = "Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$Turns = "Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$turn = 0;
	$check_Shots = True;
	$check_Turns = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
					{
						// checks for the presence of the Shots Table and the Turns Table
						if($Shots == $row["TABLE_NAME"])
							$check_Shots = False;
						if($Turns == $row["TABLE_NAME"])
							$check_Turns = False;
					}
			}
	// checks which arrangement of Turns Table is present in the Database
	if($check_Turns)
	{
        $result = $mysqli->query("SELECT * FROM Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                	// checks the turn present and changes it according to the queue, i.e. according to the order in which the ids are arranged in the Table name
                	$turn = $row['Turn'];
                	if($row['Turn'] == $B3_id)
						$mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='" . $B1_id . "'");
				}
			}
	}
	else
	{
        $result = $mysqli->query("SELECT * FROM Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
        	if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                	// checks the turn present and changes it according to the queue, i.e. according to the order in which the ids are arranged in the Table name
                	$turn = $row['Turn'];
                	if($row['Turn'] == $B3_id)
						$mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='" . $B2_id . "'");
				}
			}
	}
	// checks which arrangement of Shots Table is present in the Database
	if($check_Shots)
	{
		$result = $mysqli->query("SELECT Board, Cell FROM Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					// checks whether the move has already being played before or its a new move
					if($row['Board'] == $B1_id && $row['Cell'] == $cell && $B == 1)
					{
						goto last;
					}
					if($row['Board'] == $B2_id && $row['Cell'] == $cell && $B == 2)
					{
						goto last;
					}
				}
			}
			// new moves are stored in the Shots Table according to $B input
			if($B == 1 && $turn == $B3_id)
				$mysqli->query("INSERT INTO Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Board , Cell, Hits) VALUES ('" . $B1_id . "' , '" . $cell . "' , '" . $h_or_m . "')");
			if($B == 2 && $turn == $B3_id)
				$mysqli->query("INSERT INTO Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Board , Cell, Hits) VALUES ('" . $B2_id . "' , '" . $cell . "' , '" . $h_or_m . "')");
	}
	else
	{
		$result = $mysqli->query("SELECT Board, Cell FROM Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					// checks whether the move has already being played before or its a new move
					if($row['Board'] == $B1_id && $row['Cell'] == $cell && $B == 1)
					{
						goto last;
					}
					if($row['Board'] == $B2_id && $row['Cell'] == $cell && $B == 2)
					{
						goto last;
					}
				}
			}
			// new moves are stored in the Shots Table according to $B input
			if($B == 1 && $turn == $B3_id)
				$mysqli->query("INSERT INTO Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Board , Cell, Hits) VALUES ('" . $B1_id . "' , '" . $cell . "' , '" . $h_or_m . "')");
			if($B == 2 && $turn == $B3_id)
				$mysqli->query("INSERT INTO Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Board , Cell, Hits) VALUES ('" . $B2_id . "' , '" . $cell . "' , '" . $h_or_m . "')");
	}
	// if the move is already played then it is redirected without making any changes to the Shots and Turns table, i.e. the Turn is still same and there is no move played yet
	last:
	// Redirects to play_area.php with Player 1, Player 2 and Computer Board ids as variables
	header('Location: play_area.php?id1='. $B1_id . '&id2=' . $B2_id . '&id3=' . $B3_id);
?>