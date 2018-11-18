<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
    body {
        margin:0;
    }
    .image {
        position:fixed;
        width:100%;
        height:100%;
        background:green;
        background-image:url('Homepage.png');
        background-size:cover;
    }
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        !padding: 20px;
    }
    table.pos_fixed_1 {
        position: absolute;
        top: 100px;
        left: 200px;
    }
    table.pos_fixed_center {
        position: fixed;
        top: 140px;
        left: 510px;
    }
    table.pos_fixed_2 {
        position: absolute;
        left: 850px;
        top: 100px;
    }
    table.pos_fixed_3 {
        position: absolute;
        top: 650px;
        left: 520px;
    }
    input.pos_fixed_ac {
        position: fixed;
        top: 50px;
        left: 50px
    }
    input.pos_fixed_cr {
        position: fixed;
        top: 50px;
        left: 100px
    }
    input.pos_fixed_sb {
        position: fixed;
        top: 250px;
        left: 100px
    }
    input.pos_fixed_ds {
        position: fixed;
        top: 300px;
        left: 50px
    }
    input.pos_fixed_co {
    position: fixed;
    top: 10px;
    left: 50px;
    }
    p.pos_fixed_do {
    position: fixed;
    top: 14px;
    left: 50px;
    }
    .table {
    background: transparent;
    display: inline-block;
    border: none;
    height: 36px;
    width: 36px;
    }
    p.pos_fixed_pl1 {
        position: absolute;
        top: 12px;
        left: 330px;
        font-family: "Times New Roman", Times, serif;
        font-style: normal;
        font-size: 40px;
        color: red;
    }
    p.pos_fixed_pl2 {
        position: absolute;
        top: 12px;
        right: 330px;
        font-family: "Times New Roman", Times, serif;
        font-style: normal;
        font-size: 40px;
        color: red;
    }
    p.pos_fixed_pl3 {
        position: absolute;
        top: 562px;
        left: 630px;
        font-family: "Times New Roman", Times, serif;
        font-style: normal;
        font-size: 40px;
        color: red;
    }
    </style>
	<script type="text/javascript">
		function check_hit(cell)
		{
			alert("hit " + cell);
			location.href = 'check_hit.php?cell=' + cell;
		}
        function place(a, b, selected, orient){
            // alert(a);
            // alert(b);
            // alert(selected);
            // alert(orient);
            var fnl = ""
            lf = parseInt("201") + parseInt(b) * parseInt("40");
            lf = eval(lf);
            tp = 101 + a * 40;
            fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
            //alert(selected);
            //alert(a);
            //alert(b);
            // if (completed.includes(selected) == true) {
            //     return;
            // }
            if ((selected == "ac") && (orient == "Horizontal")) {
                // if (b > 5){
                //     return;
                // }
                // if (passing[10*a + b + 1] == 5) {
                //     return;
                // }
                // if (passing[10*a + b + 2] == 5) {
                //     return;
                // }
                // if (passing[10*a + b + 3] == 5) {
                //     return;
                // }
                // if (passing[10*a + b + 4] == 5) {
                //     return;
                // }
                // if (passing[10*a + b + 5] == 5) {
                //     return;
                // }
                // alert("Say cheese?")
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Aircraft_Carrier_True.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("ac");
                //alert(completed);
                // passing[10*a + b + 1] = 5;
                // passing[10*a + b + 2] = 5;
                // passing[10*a + b + 3] = 5;
                // passing[10*a + b + 4] = 5;
                // passing[10*a + b + 5] = 5;
                //alert(passing);
            }
            if ((selected == "cr") && (orient == "Horizontal")) {
                //alert("Say cheese?")
                // if (b > 6){
                //     return;
                // }
                // if (passing[10*a + b + 1] == 4) {
                //     return;
                // }
                // if (passing[10*a + b + 2] == 4) {
                //     return;
                // }
                // if (passing[10*a + b + 3] == 4) {
                //     return;
                // }
                // if (passing[10*a + b + 4] == 4) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Cruiser_True.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("cr");
                //alert(completed);
                // passing[10*a + b + 1] = 4;
                // passing[10*a + b + 2] = 4;
                // passing[10*a + b + 3] = 4;
                // passing[10*a + b + 4] = 4;
            }
            if ((selected == "sb") && (orient == "Horizontal")) {
                //alert("Say cheese?")
                // if (b > 7){
                //     return;
                // }
                // if (passing[10*a + b + 1] == 3) {
                //     return;
                // }
                // if (passing[10*a + b + 2] == 3) {
                //     return;
                // }
                // if (passing[10*a + b + 3] == 3) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Submarine_True.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("sb");
                //alert(completed);
                // passing[10*a + b + 1] = 3;
                // passing[10*a + b + 2] = 3;
                // passing[10*a + b + 3] = 3;
            }
            if ((selected == "ds") && (orient == "Horizontal")) {
                //alert("Say cheese?")
                // if (b > 8){
                //     return;
                // }
                // if (passing[10*a + b + 1] == 2) {
                //     return;
                // }
                // if (passing[10*a + b + 2] == 2) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Destroyer_True.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("ds");
                //alert(completed);
                // passing[10*a + b + 1] = 2;
                // passing[10*a + b + 2] = 2;
            }
            if ((selected == "ac") && (orient == "Vertical")) {
                // if (a > 5){
                //     return;
                // }
                // // if (passing[10*a + b + 1] == 5) {
                //     return;
                // }
                // // if (passing[10*a + b + 11] == 5) {
                //     return;
                // }
                // // if (passing[10*a + b + 21] == 5) {
                //     return;
                // }
                // if (passing[10*a + b + 31] == 5) {
                    // return;
                // }
                // // if (passing[10*a + b + 41] == 5) {
                //     return;
                // }
                //alert("Say cheese?")
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Aircraft_Carrier_False.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("ac");
                //alert(completed);
                // passing[10*a + b + 1] = 5;
                // passing[10*a + b + 11] = 5;
                // passing[10*a + b + 21] = 5;
                // passing[10*a + b + 31] = 5;
                // passing[10*a + b + 41] = 5;
                //alert(passing);
            }
            if ((selected == "cr") && (orient == "Vertical")) {
                //alert("Say cheese?")
                // if (a > 6){
                //     return;
                // }
                // // if (passing[10*a + b + 1] == 4) {
                //     return;
                // }
                // // if (passing[10*a + b + 11] == 4) {
                //     return;
                // }
                // // if (passing[10*a + b + 21] == 4) {
                //     return;
                // }
                // // if (passing[10*a + b + 31] == 4) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Cruiser_False.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("cr");
                //alert(completed);
                // passing[10*a + b + 1] = 4;
                // passing[10*a + b + 11] = 4;
                // passing[10*a + b + 21] = 4;
                // passing[10*a + b + 31] = 4;
            }
            if ((selected == "sb") && (orient == "Vertical")) {
                //alert("Say cheese?")
                // if (a > 7){
                //     return;
                // }
                // // if (passing[10*a + b + 1] == 3) {
                //     return;
                // }
                // // if (passing[10*a + b + 11] == 3) {
                //     return;
                // }
                // // if (passing[10*a + b + 21] == 3) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Submarine_False.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("sb");
                //alert(completed);
                // passing[10*a + b + 1] = 3;
                // passing[10*a + b + 11] = 3;
                // passing[10*a + b + 21] = 3;
            }
            if ((selected == "ds") && (orient == "Vertical")) {
                //alert("Say cheese?")
                // if (a > 8){
                //     return;
                // }
                // // if (passing[10*a + b + 1] == 2) {
                //     return;
                // }
                // // if (passing[10*a + b + 11] == 2) {
                //     return;
                // }
                var ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Destroyer_False.png");
                ac_h.setAttribute("style", fnl);
                //alert("I'm here!");
                //alert(fnl);
                document.body.appendChild(ac_h);
                completed.push("ds");
                //alert(completed);
                // passing[10*a + b + 1] = 2;
                // passing[10*a + b + 11] = 2;
            }
            // alert(passing);
        }
        function put_my_ships(ship_id, orient, cell_number)
        {
            // alert("Going Inside");
            // alert(ship_id);
            // alert(orient);
            // alert(cell_number);
            a = Math.floor(cell_number / 10);
            b = cell_number % 10 - 1;
            if (ship_id == 5){
                ship = "ac";
            }
            if (ship_id == 4){
                ship = "cr";
            }
            if (ship_id == 3){
                ship = "sb";
            }
            if (ship_id == 2){
                ship = "ds";
            }
            place(a, b, ship, orient);
        }
        function hit_or_miss(a, b, hit, id) {
            /* See if you do need the thing for the player who is playing. You may need it */
            if (id == 1){  // Me
                tp = 101 + a * 40;
                lf = 201 + b * 40;
                fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
                if (hit != 0){
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Hit_cell.png");
                    ac.h.setAttribute("style", fnl);
                    document.body.appendChild(ac_h);
                }
                else {
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Hit_cell.png");
                    ac.h.setAttribute("style", fnl);
                }
            }

            if (id == 2){  // Other Player
                tp = 101 + a * 40;
                lf = 851 + b * 40;
                fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
                if (hit != 0){
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Hit_cell.png");
                    ac.h.setAttribute("style", fnl);
                    document.body.appendChild(ac_h);
                }
                else {
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Hit_cell.png");
                    ac.h.setAttribute("style", fnl);
                }
            }
            if (id == 3) { // Computer
                tp = 651 + a * 40;
                lf = 521 + b * 40;
                fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
                if (hit != 0){
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Hit_cell.png");
                    ac.h.setAttribute("style", fnl);
                    document.body.appendChild(ac_h);
                }
                else {
                    ac_h = document.createElement("IMG");
                    ac_h.setAttribute("src", "Miss_cell.png");
                    ac.h.setAttribute("style", fnl);
                    document.body.appendChild(ac_h);
                }
            }
        }
    function check_cell(cell_number, h_or_m, player_id){
        a = Math.floor(cell_number / 10);
        b = cell_number % 10 - 1;
        hit_or_miss(a, b, h_or_m, player_id);
    }
	</script>
</head>
<body> <!-- An image is needed. Will work on that.-->
<!-- <div class = "image"></div> -->
<p class = "pos_fixed_pl1"> Player 1</p>
<p class = "pos_fixed_pl2"> Player 2</p>
<p class = "pos_fixed_pl3"> Computer</p>

<img src = "Aircraft_Carrier_False.png" style = "top: 100px; left: 20px; position: absolute;">
<img src = "Cruiser_False.png" style = "top: 100px; left: 70px; position: absolute;">
<img src = "Submarine_False.png" style = "top: 270px; left: 70px; position: absolute;">
<img src = "Destroyer_False.png" style = "top: 310px; left: 20px; position: absolute;">

<img src = "Aircraft_Carrier_False.png" style = "top: 100px; left: 1380px; position: absolute;">
<img src = "Cruiser_False.png" style = "top: 100px; left: 1330px; position: absolute;">
<img src = "Submarine_False.png" style = "top: 270px; left: 1330px; position: absolute;">
<img src = "Destroyer_False.png" style = "top: 310px; left: 1380px; position: absolute;">

<img src = "Aircraft_Carrier_False.png" style = "top: 650px; left:420px; position: absolute;">
<img src = "Cruiser_False.png" style = "top: 650px; left: 470px; position: absolute;">
<img src = "Submarine_False.png" style = "top: 820px; left: 470px; position: absolute;">
<img src = "Destroyer_False.png" style = "top: 860px; left: 420px; position: absolute;">
    
<table bgcolor = "586171" class = "pos_fixed_1">
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
</tr>
<tr>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table"></td>
<td><input type = "button" class = "table""></td>
</tr>
</table>
    <?php
        $B_id = $_GET['id'];
        echo $B_id, "<br>";
        $mysqli = new mysqli("localhost", "root", "", "Battleship");
        $mysqli->query("USE Battleship");
        $result = $mysqli->query("SELECT * FROM Board_" . $B_id);
            if($result->num_rows > 0)
                    while($row = $result->fetch_assoc())
                        $Board[$row["Positions"]] = $row["Ship"];
            for ($i=1; $i <= 100 ; $i++) { 
                echo $Board[$i], " ";
                if($i%10 == 0)
                    echo "<br>";
            }
                    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        for ($i=1; $i <= 10; $i++)
        {
                for ($j=10*($i-1)+1; $j <= 10*$i; $j++)
                {
                    echo $j, " ", $Board[$j];
                    if($Board[$j] != 0)
                    {
                        echo $Board[$j], " " ,$Board[$j+1], " " ,$Board[$j+4];
                        if($Board[$j] == 5 && $Board[$j+1] == 5 && $Board[$j+4] == 5)
                            echo "hahah<script>
                                    load1();
                                        function load1()
                                        {
                                            id = 5;
                                            or = \"Horizontal\";
                                            put_my_ships(id, or, " . json_encode($j) . ");
                                        }
                                </script>";
                        else if($Board[$j] == 4 && $Board[$j+1] == 4 && $Board[$j+3] == 4)
                            echo "h<script>
                                    load2();
                                        function load2()
                                        {
                                            id = 4;
                                            or = \"Horizontal\";
                                            put_my_ships(id, or, " . json_encode($j) . ");
                                        }
                                </script>";
                        else if($Board[$j] == 3 && $Board[$j+1] == 3 && $Board[$j+2] == 3)
                            echo "ha<script>
                                    load3();
                                        function load3()
                                        {
                                            id = 3;
                                            or = \"Horizontal\";
                                            put_my_ships(id, or, " . json_encode($j) . ");
                                        }
                                </script>";
                        else if($Board[$j] == 2 && $Board[$j+1] == 2)
                            echo "haa<script>
                                    load4();
                                        function load4()
                                        {
                                            id = 2;
                                            or = \"Horizontal\";
                                            put_my_ships(id, or, " . json_encode($j) . ");
                                        }
                                </script>";
                        // else
                        //     echo "<td><input type = \"button\" class = \"table\" onclick = \"check_hit(" . $j . ")\"></td>";
                    }
                    // else
                    //     echo "<td><input value = \"" . $Board[$j] . "\" type = \"button\" class = \"table\" onclick = \"check_hit(" . $j . ")\"></td>"; 

                } 
        }
    ?>
<table bgcolor = "586171" class = "pos_fixed_2">
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(1)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(2)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(3)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(4)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(5)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(6)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(7)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(8)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(9)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(10)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(11)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(12)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(13)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(14)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(15)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(16)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(17)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(18)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(19)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(20)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(21)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(22)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(23)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(24)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(25)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(26)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(27)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(28)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(29)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(30)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(31)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(32)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(33)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(34)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(35)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(36)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(37)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(38)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(39)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(40)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(41)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(42)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(43)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(44)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(45)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(46)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(47)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(48)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(49)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(50)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(51)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(52)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(53)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(54)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(55)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(56)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(57)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(58)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(59)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(60)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(61)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(62)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(63)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(64)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(65)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(66)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(67)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(68)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(69)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(70)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(71)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(72)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(73)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(74)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(75)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(76)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(77)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(78)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(79)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(80)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(81)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(82)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(83)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(84)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(85)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(86)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(87)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(88)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(89)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(90)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(91)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(92)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(93)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(94)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(95)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(96)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(97)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(98)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(99)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(100)"></td>
    </tr>
</table>
<center>
<table bgcolor = "586171" class = "pos_fixed_3">
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(1)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(2)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(3)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(4)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(5)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(6)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(7)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(8)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(9)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(10)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(11)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(12)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(13)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(14)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(15)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(16)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(17)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(18)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(19)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(20)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(21)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(22)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(23)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(24)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(25)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(26)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(27)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(28)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(29)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(30)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(31)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(32)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(33)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(34)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(35)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(36)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(37)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(38)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(39)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(40)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(41)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(42)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(43)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(44)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(45)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(46)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(47)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(48)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(49)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(50)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(51)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(52)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(53)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(54)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(55)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(56)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(57)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(58)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(59)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(60)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(61)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(62)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(63)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(64)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(65)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(66)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(67)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(68)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(69)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(70)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(71)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(72)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(73)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(74)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(75)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(76)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(77)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(78)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(79)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(80)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(81)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(82)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(83)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(84)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(85)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(86)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(87)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(88)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(89)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(90)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit(91)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(92)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(93)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(94)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(95)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(96)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(97)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(98)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(99)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit(100)"></td>
    </tr>
</table>
</center>
</body>
</html>
