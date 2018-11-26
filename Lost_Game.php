<?php 
	$B1_id = $_GET['id1'];
	$B2_id = $_GET['id2'];
	$B3_id = $_GET['id3'];
	$L = $_GET['L'];
	$mysqli = new mysqli("localhost", "root", "", "Battleship");
	$mysqli->query("USE Battleship");
	$Lost = "Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
	$check_Lost = True;
	$result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
		if($result->num_rows > 0)
			{
					while($row = $result->fetch_assoc())
					{
						echo $row["TABLE_NAME"] . "<br>";
						if($Lost == $row["TABLE_NAME"])
							$check_Lost = False;
					}
			}
	if($check_Lost)
	{
        $mysqli->query("CREATE TABLE Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost int NOT NULL)");
		$mysqli->query("INSERT INTO Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
	}
	else
	{
        $mysqli->query("CREATE TABLE Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost int NOT NULL)");
		$mysqli->query("INSERT INTO Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
	}
	header('Location: play_area.php?id1='. $B1_id . '&id2=' . $B2_id . '&id3=' . $B3_id);
?>