<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="refresh" content="5" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        margin:0;
    }
    .image {
        position: fixed;
        width: 100%;
        height: 100%;
        background: black;
        background-image: url('Homepage.png');
        background-size: cover;
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
        position: absolute;
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
    border: 2px;
    border-style: solid;
    border-color: #586171;
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
    p.demo {
        position: absolute;
        top: 25px;
        right: 20px;
        font-size: 20px;
        color: white;
    }
    p.above_demo {
        position: absolute;
        top: 5px;
        right: 20px;
        font-size: 20px;
        color: white;
    }
    img.loading {
        position: fixed;
        z-index: 1;
        top: 0px;
        left: 0px;
        size: cover;
        height: 100%;
        width: 100%;
    }
    img.GameOverP1 {
        position: absolute;
        top: 100px;
        left: 200px;
        height: 400px;
        width: 400px;
    }
    img.GameOverP2 {
        position: absolute;
        top: 100px;
        left: 850px;
        height: 400px;
        width: 400px;
    }
    img.GameOverP3 {
        position: absolute;
        top: 650px;
        left: 520px;
        height: 400px;
        width: 400px;
    }
    img.WinnerP1 {
        position: absolute;
        top: 100px;
        left: 200px;
        height: 400px;
        width: 400px;
    }
    img.WinnerP2 {
        position: absolute;
        top: 100px;
        left: 850px;
        height: 400px;
        width: 400px;
    }
    img.WinnerP3 {
        position: absolute;
        top: 650px;
        left: 520px;
        height: 400px;
        width: 400px;
    }
    form.center {
        position: absolute;
        top: 500px;
        right: 290px;
        height: 100px;
        width: 200px;
    }
</style>
<script type="text/javascript">
function place(a, b, selected, orient){
    // The variables fnl, lf and tp are defined so that we are able to place the image of the ship in the correct position on the screen. 
    var fnl = ""
    lf = parseInt("201") + parseInt(b) * parseInt("40");
    lf = eval(lf);
    tp = 101 + a * 40;
    fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute"
    // The validity of the functions has already been checked, all we need to do is put the imaage on the screen, which is again done by the variable ac_h. 
    if ((selected == "ac") && (orient == "Horizontal")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Aircraft_Carrier_True.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("ac");
    }
    if ((selected == "cr") && (orient == "Horizontal")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Cruiser_True.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("cr");
    }
    if ((selected == "sb") && (orient == "Horizontal")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Submarine_True.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("sb");
    }
    if ((selected == "ds") && (orient == "Horizontal")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Destroyer_True.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("ds");
    }
    if ((selected == "ac") && (orient == "Vertical")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Aircraft_Carrier_False.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("ac");
    }
    if ((selected == "cr") && (orient == "Vertical")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Cruiser_False.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("cr");
    }
    if ((selected == "sb") && (orient == "Vertical")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Submarine_False.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("sb");
    }
    if ((selected == "ds") && (orient == "Vertical")) {
        var ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "Destroyer_False.png");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        completed.push("ds");
    }
}
function put_my_ships(ship_id, orient, cell_number){
    // This function converts the ship_id and cell_number into the required format to call the function place. 
    a = Math.floor(cell_number / 10);
    b = cell_number % 10 - 1;
    if (b == -1) {
        b = 9;
        a = a - 1;
    }
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
function hit_or_miss(a, b, hit, id, last_hit) {
    // Ths function, given the cell location and whether it has been hit or not, and then appends the image onto the screen. The variables tp, lf and fnl are used in the same ways as before. 
    var fnl = "";
    if (id == 1){  // Me
        tp = 101 + a * 40;
        lf = 201 + b * 40;
        fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
        if (hit != 0){
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Hit_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
        else {
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Miss_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
    }
    
    if (id == 2){  // Other Player
        tp = 101 + a * 40;
        lf = 851 + b * 40;
        fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;";
        if (hit != 0){
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Hit_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
        else {
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Miss_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
    }
    if (id == 3) { // Computer
        tp = 651 + a * 40;
        lf = 521 + b * 40;
        fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;"
        if (hit != 0){
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Hit_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
        else {
            ac_h = document.createElement("IMG");
            ac_h.setAttribute("src", "Miss_cell.png");
            ac_h.setAttribute("style", fnl);
            document.body.appendChild(ac_h);
        }
    }
}
function check_cell(cell_number, h_or_m, player_id, last_hit){
    // This function converts the cell number into the required format to call the function hit_or_miss.
    a = Math.floor(cell_number / 10);
    b = cell_number % 10 - 1;
    if (b == -1) {
        b = 9;
        a = a - 1;
    }
    hit_or_miss(a, b, h_or_m, player_id, last_hit);
}
function show_turn(id) {
    // This function sees who's turn it is and appends a small image over the player's name, to indicate to that player that it's their turn using the variable ac_h. 
    if (id == 0) {
        return;
    }
    ac_h = document.createElement("IMG");
    ac_h.setAttribute("src", "Turn.png");
    if (id == 1){ // Player 1's Turn
        ac_h.setAttribute("style", "top: 50px; left: 465px; position: absolute");
    }
    if (id == 2) { // Player 2's Turn
        ac_h.setAttribute("style", "top: 50px; left: 1120px; position: absolute");
    }
    if (id == 3) { // Computer's Turn
        ac_h.setAttribute("style", "top: 605px; left: 800px; position: absolute");
    }
    document.body.appendChild(ac_h);
}
function ch2_delay(cell, id1, id2, id3, turn, lost) {
    // This function helps in the playing the animation of the cell blowing up.
    location.href = 'check_hit.php?cell=' + cell + '&id1=' + id1 + '&id2=' + id2 + '&id3=' + id3 + '&B=2';
}
function ch3_delay(cell, id1, id2, id3, turn, lost) {
    // This function helps in the playing the animation of the cell blowing up.    
    location.href = 'check_hit.php?cell=' + cell + '&id1=' + id1 + '&id2=' + id2 + '&id3=' + id3 + '&B=3';
}
function check_hit_2(cell, id1, id2, id3, turn, lost){
    // This function is what is called when you click on a button on the other player's board. It calls the php file which allows us to see whether there is actually a ship there or not. 
    if(turn == id1 && lost != id2) {
        a = Math.floor(cell / 10);
        b = cell % 10 - 1;
        if (b == -1) {
            b = 9;
            a = a - 1;
        }    
        var fnl = '';
        tp = 65 + a * 40;
        lf = 848 + b * 40;
        fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;" + "width: 100px; height: 100px;";
        ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "blow.gif");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        setTimeout(ch2_delay, 750, cell, id1, id2, id3, turn, lost);
    }
}
function check_hit_3(cell, id1, id2, id3, turn, lost){
    // This function is what is called when you click on a button on the cpmputer's board. It calls the php file which allows us to see whether there is actually a ship there or not. 
    if(turn == id1 && lost != id3){
        a = Math.floor(cell / 10);
        b = cell % 10 - 1;
        if (b == -1) {
            b = 9;
            a = a - 1;
        }    
        var fnl = '';
        tp = 615 + a * 40;
        lf = 518 + b * 40;
        fnl += "top: " + tp + "px; left: " + lf + "px; position: absolute;" + "width: 100px; height: 100px;";
        ac_h = document.createElement("IMG");
        ac_h.setAttribute("src", "blow.gif");
        ac_h.setAttribute("style", fnl);
        document.body.appendChild(ac_h);
        setTimeout(ch3_delay, 750, cell, id1, id2, id3, turn, lost);

    }
}
function show_hits_on_side(player_id, ship_id, no_of_hits){
    // This function takes in as input the player, ship, and the number of hits that ship has taken, and then it displays on screen this information. 
    if (player_id == 1) {
        if (ship_id == 5) {
            lf = 20;
            for (i = 0; i < no_of_hits; i++) {
                tp = 100 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 4) {
            lf = 70;
            for (i = 0; i < no_of_hits; i++) {
                tp = 100 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 3) {
            lf = 70;
            for (i = 0; i < no_of_hits; i++) {
                tp = 270 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 2) {
            lf = 20;
            for (i = 0; i < no_of_hits; i++) {
                tp = 310 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
    }
    if (player_id == 2) {
        if (ship_id == 5) {
            lf = 1380;
            for (i = 0; i < no_of_hits; i++) {
                tp = 100 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 4) {
            lf = 1330;
            for (i = 0; i < no_of_hits; i++) {
                tp = 100 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 3) {
            lf = 1330;
            for (i = 0; i < no_of_hits; i++) {
                tp = 270 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 2) {
            lf = 1380;
            for (i = 0; i < no_of_hits; i++) {
                tp = 310 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
    }
    if (player_id == 3
        ) {
        if (ship_id == 5) {
            lf = 420;
            for (i = 0; i < no_of_hits; i++) {
                tp = 650 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 4) {
            lf = 470;
            for (i = 0; i < no_of_hits; i++) {
                tp = 650 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 3) {
            lf = 470;
            for (i = 0; i < no_of_hits; i++) {
                tp = 820 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
        if (ship_id == 2) {
            lf = 420;
            for (i = 0; i < no_of_hits; i++) {
                tp = 860 + i * 40;
                fnl = "top: " + tp + "px; left: " + lf + "px; position: absolute;";
                ac_h = document.createElement("IMG");
                ac_h.setAttribute("src", "Hit_cell.png");
                ac_h.setAttribute("style", fnl);
                document.body.appendChild(ac_h);
            }
        }
    }
}
var passing = [];
var i;
    for (i = 1; i < 101; i++) {
        passing[i] = 0;
    }
function check_validity_and_place(ship_id, orient, a, b){
    // This is a function which is used to check whether a given ship in a given orientation is valid in it's positioning or not. The method used is the same as in setup.html. 
    if ((ship_id == 5) && (orient == "Horizontal")) {
        if (b > 5) {
            return false;
        }
        passing[10*a + b + 1] = 5;
        passing[10*a + b + 2] = 5;
        passing[10*a + b + 3] = 5;
        passing[10*a + b + 4] = 5;
        passing[10*a + b + 5] = 5;
        return true;
    }
    if ((ship_id == 4) && (orient == "Horizontal")) {
        if (b > 6) {
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 2] != 0) {
            return false;
        }
        if (passing[10*a + b + 3] != 0) {
            return false;
        }
        if (passing[10*a + b + 4] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 4;
        passing[10*a + b + 2] = 4;
        passing[10*a + b + 3] = 4;
        passing[10*a + b + 4] = 4;
        return true;
    }
    if ((ship_id == 3) && (orient == "Horizontal")) {
        if (b > 7){
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 2] != 0) {
            return false;
        }
        if (passing[10*a + b + 3] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 3;
        passing[10*a + b + 2] = 3;
        passing[10*a + b + 3] = 3;
        return true;
    }
    if ((ship_id == 2) && (orient == "Horizontal")) {
        if (b > 8){
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 2] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 2;
        passing[10*a + b + 2] = 2;
        return true;
    }
    if ((ship_id == 5) && (orient == "Vertical")) {
        if (a > 5){
            return false;
        }
        passing[10*a + b + 1] = 5;
        passing[10*a + b + 11] = 5;
        passing[10*a + b + 21] = 5;
        passing[10*a + b + 31] = 5;
        passing[10*a + b + 41] = 5;
        return true;
    }
    if ((ship_id == 4) && (orient == "Vertical")) {
        if (a > 6){
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 11] != 0) {
            return false;
        }
        if (passing[10*a + b + 21] != 0) {
            return false;
        }
        if (passing[10*a + b + 31] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 4;
        passing[10*a + b + 11] = 4;
        passing[10*a + b + 21] = 4;
        passing[10*a + b + 31] = 4;
        return true;
    }
    if ((ship_id == 3) && (orient == "Vertical")) {
        if (a > 7){
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 11] != 0) {
            return false;
        }
        if (passing[10*a + b + 21] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 3;
        passing[10*a + b + 11] = 3;
        passing[10*a + b + 21] = 3;
        return true;
    }
    if ((ship_id == 2) && (orient == "Vertical")) {
        if (a > 8){
            return false;
        }
        if (passing[10*a + b + 1] != 0) {
            return false;
        }
        if (passing[10*a + b + 11] != 0) {
            return false;
        }
        passing[10*a + b + 1] = 2;
        passing[10*a + b + 11] = 2;
        return true;
    }
}
function create_comp_board(){
    // This function creates a randomly generated board for the computer to use. This is almost randomly generated such that there is no ships in the central 4x4 grid. 
    var i;
    var direction = [];
    direction[0] = "Horizontal";
    direction[1] = "Vertical";
    var random_1 = [0, 1, 2, 7, 8, 9];
    var random_2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for (i = 5; i > 1; i--) {
        var flag = false;
        while (flag == false){
            var dir = direction[Math.floor(Math.random() * direction.length)];
            var rand_1 = random_1[Math.floor(Math.random() * random_1.length)];
            var rand_2 = random_2[Math.floor(Math.random() * random_2.length)];
            if (dir == "Horizontal") {
                var ok = check_validity_and_place(i, dir, rand_1, rand_2);
                if (ok == true){
                    flag = true;
                }
            }
            if (dir == "Vertical") {
                var ok = check_validity_and_place(i, dir, rand_2, rand_1);
                if (ok == true){
                    flag = true;
                }
            }
        }
    }
}
function send_board(id1, id2){
    location.href = 'send_comp_board.php?id1=' + id1 + '&id2=' + id2 + '&array=' + passing;
}
function comp_hit_cell(id, id1, id2, id3, turn){
    var place = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100];
    if(id == 1)
    {
        var cell = place[Math.floor(Math.random() * place.length)];
        location.href = 'check_hit_comp.php?cell=' + cell + '&id1=' + id1 + '&id2=' + id2 + '&id3=' + id3 + '&B=1';
    }
    else if(id == 2)
    {
        var cell = place[Math.floor(Math.random() * place.length)];
        location.href = 'check_hit_comp.php?cell=' + cell + '&id1=' + id1 + '&id2=' + id2 + '&id3=' + id3 + '&B=2';
    }
}
function evaluate_board(board){
    // This function, upon given a board, calculates how many times (and in which places) the ship has been hit and which cells have been hit on and missed. 
    var i;
    var ac_hits;
    var cr_hits;
    var sb_hits;
    var ds_hits;
    var misses;
    var ac_loc;
    var cr_loc;
    var sb_loc;
    var ds_loc;
    var ms_loc;
    ac_hits = 0;
    cr_hits = 0;
    sb_hits = 0;
    ds_hits = 0;
    misses = 0;
    ac_loc = [];
    cr_loc = [];
    sb_loc = [];
    ds_loc = [];
    ms_loc = [];
    for (i = 1; i < 101; i++) {
        if (board[i] == 5) {
            ac_loc[ac_hits] = i;
            ac_hits = ac_hits + 1;
        }
        if (board[i] == 4) {
            cr_loc[cr_hits] = i;
            cr_hits = cr_hits + 1;
        }
        if (board[i] == 3) {
            sb_loc[sb_hits] = i;
            sb_hits = sb_hits + 1;
        }
        if (board[i] == 2) {
            ds_loc[ds_hits] = i;
            ds_hits = ds_hits + 1;
        }
        if (board[i] == 0) {
            ms_loc[misses] = i;
            misses = misses + 1;
        }
    }
    var return_list;
    return_list = [];
    return_list[0] = ac_hits;
    return_list[1] = cr_hits;
    return_list[2] = sb_hits;
    return_list[3] = ds_hits;
    return_list[4] = misses;
    return_list[5] = ac_hits + cr_hits + sb_hits + ds_hits;
    return_list[6] = ac_loc;
    return_list[7] = cr_loc;
    return_list[8] = sb_loc;
    return_list[9] = ds_loc;
    return_list[10] = ms_loc;
    return return_list;
}
function compute_guesses(cell_number) {
    // This function, upon given a cell number, copmutes the cells on the grid which surround it. 
    var r;
    r = []
    a = Math.floor(cell_number / 10);
    b = cell_number % 10 - 1;
    if (b == -1) {
        b = 9;
        a = a - 1;
    }
    if (cell_number == 1) {
        r[0] = 2;
        r[1] = 11;
    }
    else if (cell_number == 10) {
        r[0] = 9;
        r[1] = 20;
    }
    else if (cell_number == 91) {
        r[0] = 81;
        r[0] = 92;
    }
    else if (cell_number == 100) {
        r[0] = 99;
        r[0] = 90;
    }
    else if (a == 0) {
        r[0] = cell_number - 1;
        r[1] = cell_number + 1;
        r[2] = cell_number + 10;
    }
    else if (a == 9) {
        r[0] = cell_number - 10;
        r[1] = cell_number - 1;
        r[2] = cell_number + 1;
    }
    else if (b == 0) {
        r[0] = cell_number - 10;
        r[1] = cell_number + 1;
        r[2] = cell_number + 10;
    }
    else if (b == 9) {
        r[0] = cell_number - 10;
        r[1] = cell_number - 1;
        r[2] = cell_number + 10;
    }
    else {
        r[0] = cell_number - 10;
        r[1] = cell_number - 1;
        r[2] = cell_number + 1;
        r[3] = cell_number + 10;
    }
    return r;
}
function minimum_of_list(list) {
    // This function calculates the smallest element of the list. 
    var i;
    var minimum = list[0];
    for (i = 1; i < list.length; i++) {
        if (list[i] < minimum) {
            minimum = list[i];
        }
    }
    return minimum;
}
function maximum_of_list(list) {
    // This function calculates the largest element of the list. 
    var i;
    var maximum = list[0];
    for (i = 1; i < list.length; i++) {
        if (list[i] > maximum) {
            maximum = list[i];
        }
    }
    return maximum;
}
function the_computer_plays(board_1, board_2, computer_board, id1, id2, id3) {
    /* This function calculates the next guess of the computer. This has 2 parts:
        1: Who to attack
        2: Where to attack
    */
    pl_1_array = evaluate_board(board_1);
    pl_2_array = evaluate_board(board_2);
    comp_array = evaluate_board(computer_board);
    var who_to_hit = 0;
    var guess = 0;
    if (pl_1_array[5] == 14) {
        who_to_hit = 2;
    }
    else if (pl_2_array[5] == 14) {
        who_to_hit = 1;
    }
    else if (comp_array[5] >= pl_1_array[5] && comp_array[5] >= pl_2_array[5]) {
        if (pl_1_array[5] > pl_2_array[5]) {
            who_to_hit = 1;
        }
        else if (pl_1_array[5] < pl_2_array[5]){
            who_to_hit = 2;
        }
        else {
            var mb = [1, 2];
            var who_to_hit = mb[Math.floor(Math.random() * mb.length)];
        }
    }
    else if (pl_1_array[0] != 5 && pl_1_array[0] != 0) {
        who_to_hit = 1;
    }
    else if (pl_2_array[0] != 5 && pl_2_array[0] != 0) {
        who_to_hit = 2;
    }
    else if (pl_1_array[1] != 4 && pl_1_array[1] != 0) {
        who_to_hit = 1;
    }
    else if (pl_2_array[1] != 4 && pl_2_array[1] != 0) {
        who_to_hit = 2;
    }
    else if (pl_1_array[2] != 3 && pl_1_array[2] != 0) {
        who_to_hit = 1;
    }
    else if (pl_2_array[2] != 3 && pl_2_array[2] != 0) {
        who_to_hit = 2;
    }
    else if (pl_1_array[3] != 2 && pl_1_array[3] != 0) {
        who_to_hit = 1;
    }
    else if (pl_2_array[3] != 2 && pl_2_array[3] != 0) {
        who_to_hit = 2;
    }
    else if (comp_array[5] >= 9) {
        if (pl_1_array[5] > pl_2_array[5]) {
            who_to_hit = 1;
        }
        else if (pl_1_array[5] < pl_2_array[5]){
            who_to_hit = 2;
        }
        else {
            var mb = [1, 2];
            var who_to_hit = mb[Math.floor(Math.random() * mb.length)];
        }
    }
    else {
        if (pl_1_array[5] > pl_2_array[5]) {
            who_to_hit = 2;
        }
        else if (pl_2_array[5] > pl_1_array[5]){
            who_to_hit = 1;
        }
        else {
            var mb = [1, 2];
            var who_to_hit = mb[Math.floor(Math.random() * mb.length)];
        }
    }
    if (who_to_hit == 1) {
        var ac_hits = pl_1_array[0];
        var cr_hits = pl_1_array[1];
        var sb_hits = pl_1_array[2];
        var ds_hits = pl_1_array[3];
        var misses = pl_1_array[4];
        var ac_loc = pl_1_array[6];
        var cr_loc = pl_1_array[7];
        var sb_loc = pl_1_array[8];
        var ds_loc = pl_1_array[9];
        var ms_loc = pl_1_array[10];
        if ((ac_hits != 0) && (ac_hits != 5)) {
            if (ac_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = ac_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_1[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                var current_hit_1 = ac_loc[0];
                var current_hit_2 = ac_loc[1];
                var a = Math.floor((minimum_of_list(ac_loc) - 1) / 10);
                var b = (minimum_of_list(ac_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(ac_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(ac_loc) + 10;
                        possible_hits[1] = minimum_of_list(ac_loc) + 20;
                        possible_hits[2] = minimum_of_list(ac_loc) + 30;
                        possible_hits[3] = minimum_of_list(ac_loc) + 40;
                    }
                    else if (a != 9 && board_1[maximum_of_list(ac_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(ac_loc) - 10;
                        possible_hits[1] = maximum_of_list(ac_loc) - 20;
                        possible_hits[2] = maximum_of_list(ac_loc) - 30;
                        possible_hits[3] = maximum_of_list(ac_loc) - 40;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[3] = current_hit_1 + 30;
                        possible_hits[5] = current_hit_1 + 40;
                        possible_hits[0] = current_hit_1 - 10;
                        possible_hits[2] = current_hit_1 - 20;
                        possible_hits[4] = current_hit_1 - 30;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(ac_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(ac_loc) + 1;
                        possible_hits[1] = minimum_of_list(ac_loc) + 2;
                        possible_hits[2] = minimum_of_list(ac_loc) + 3;
                        possible_hits[3] = minimum_of_list(ac_loc) + 4;
                    }
                    else if (b != 9 && board_1[maximum_of_list(ac_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(ac_loc) - 1;
                        possible_hits[1] = maximum_of_list(ac_loc) - 2;
                        possible_hits[2] = maximum_of_list(ac_loc) - 3;
                        possible_hits[3] = maximum_of_list(ac_loc) - 4;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[3] = current_hit_1 + 3;
                        possible_hits[5] = current_hit_1 + 4;
                        possible_hits[0] = current_hit_1 - 1;
                        possible_hits[2] = current_hit_1 - 2;
                        possible_hits[4] = current_hit_1 - 3;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_1[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((cr_hits != 0) && (cr_hits != 4)) {
            if (cr_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = cr_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_1[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                current_hit_1 = cr_loc[0];
                current_hit_2 = cr_loc[1];
                var a = Math.floor((minimum_of_list(cr_loc) - 1) / 10);
                var b = (minimum_of_list(cr_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(cr_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(cr_loc) + 10;
                        possible_hits[1] = minimum_of_list(cr_loc) + 20;
                        possible_hits[2] = minimum_of_list(cr_loc) + 30;
                    }
                    else if (a != 9 && board_1[maximum_of_list(cr_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(cr_loc) - 10;
                        possible_hits[1] = maximum_of_list(cr_loc) - 20;
                        possible_hits[2] = maximum_of_list(cr_loc) - 30;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[3] = current_hit_1 + 30;
                        possible_hits[0] = current_hit_1 - 10;
                        possible_hits[2] = current_hit_1 - 20;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(cr_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(cr_loc) + 1;
                        possible_hits[1] = minimum_of_list(cr_loc) + 2;
                        possible_hits[2] = minimum_of_list(cr_loc) + 3;
                    }
                    else if (b != 9 && board_1[maximum_of_list(cr_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(cr_loc) - 1;
                        possible_hits[1] = maximum_of_list(cr_loc) - 2;
                        possible_hits[2] = maximum_of_list(cr_loc) - 3;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[3] = current_hit_1 + 3;
                        possible_hits[0] = current_hit_1 - 1;
                        possible_hits[2] = current_hit_1 - 2;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_1[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((sb_hits != 0) && (sb_hits != 3)) {
            if (sb_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = sb_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_1[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                current_hit_1 = sb_loc[0];
                current_hit_2 = sb_loc[1];
                var a = Math.floor((minimum_of_list(sb_loc) - 1) / 10);
                var b = (minimum_of_list(sb_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(sb_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(sb_loc) + 10;
                        possible_hits[1] = minimum_of_list(sb_loc) + 20;
                    }
                    else if (a != 9 && board_1[maximum_of_list(sb_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(sb_loc) - 10;
                        possible_hits[1] = maximum_of_list(sb_loc) - 20;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[0] = current_hit_1 - 10;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(sb_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(sb_loc) + 1;
                        possible_hits[1] = minimum_of_list(sb_loc) + 2;
                    }
                    else if (b != 9 && board_1[maximum_of_list(sb_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(sb_loc) - 1;
                        possible_hits[1] = maximum_of_list(sb_loc) - 2;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[0] = current_hit_1 - 1;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_1[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((ds_hits != 0) && (ds_hits != 2)) {
            var possible_hits;
            possible_hits = [];
            current_hit = ds_loc[0];
            possible_hits = compute_guesses(current_hit);
            var j;
            for (j = 0; j < possible_hits.length; j++) {
                if (board_1[possible_hits[j]] == -1) {
                    guess = possible_hits[j];
                    break;
                }
            }
        }
        else {
            var i;
            var possible_hits;
            possible_hits = [];
            if (ms_loc.length == 0) {
                possible_hits = [34, 35, 36, 37, 44, 45, 46, 47, 54, 55, 56, 57, 64, 65, 66, 67];
            }
            else {
                var target_cell;
                var flag;
                flag = false;
                while (flag != true) {
                    target_cell = ms_loc[Math.floor(Math.random() * ms_loc.length)];
                    if ((target_cell - 11) >= 1 && (target_cell - 11) <= 100 && target_cell % 10 != 1 && board_1[target_cell - 11] == -1){
                        possible_hits.push(target_cell - 11);
                    }
                    if ((target_cell - 9) >= 1 && (target_cell - 9) <= 100 && target_cell % 10 != 0 && board_1[target_cell - 9] == -1){
                        possible_hits.push(target_cell - 9);
                    }
                    if ((target_cell + 9) >= 1 && (target_cell + 9) <= 100 && target_cell % 10 != 1 && board_1[target_cell + 9] == -1){
                        possible_hits.push(target_cell + 9);
                    }
                    if ((target_cell + 11) >= 1 && (target_cell + 11) <= 100 && target_cell % 10 != 0 && board_1[target_cell + 11] == -1){
                        possible_hits.push(target_cell + 11);
                    }
                    if (possible_hits.length > 0) {
                        flag = true
                    }
                }
            }
            guess = possible_hits[Math.floor(Math.random() * possible_hits.length)];
        }
    }
    if (who_to_hit == 2) {
        ac_hits = pl_2_array[0];
        cr_hits = pl_2_array[1];
        sb_hits = pl_2_array[2];
        ds_hits = pl_2_array[3];
        misses = pl_2_array[4];
        ac_loc = pl_2_array[6];
        cr_loc = pl_2_array[7];
        sb_loc = pl_2_array[8];
        ds_loc = pl_2_array[9];
        ms_loc = pl_2_array[10];
        if ((ac_hits != 0) && (ac_hits != 5)) {
            if (ac_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = ac_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_2[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                current_hit_1 = ac_loc[0];
                current_hit_2 = ac_loc[1];
                var a = Math.floor((minimum_of_list(ac_loc) - 1) / 10);
                var b = (minimum_of_list(ac_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(ac_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(ac_loc) + 10;
                        possible_hits[1] = minimum_of_list(ac_loc) + 20;
                        possible_hits[2] = minimum_of_list(ac_loc) + 30;
                        possible_hits[3] = minimum_of_list(ac_loc) + 40;
                    }
                    else if (a != 9 && board_1[maximum_of_list(ac_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(ac_loc) - 10;
                        possible_hits[1] = maximum_of_list(ac_loc) - 20;
                        possible_hits[2] = maximum_of_list(ac_loc) - 30;
                        possible_hits[3] = maximum_of_list(ac_loc) - 40;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[3] = current_hit_1 + 30;
                        possible_hits[5] = current_hit_1 + 40;
                        possible_hits[0] = current_hit_1 - 10;
                        possible_hits[2] = current_hit_1 - 20;
                        possible_hits[4] = current_hit_1 - 30;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(ac_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(ac_loc) + 1;
                        possible_hits[1] = minimum_of_list(ac_loc) + 2;
                        possible_hits[2] = minimum_of_list(ac_loc) + 3;
                        possible_hits[3] = minimum_of_list(ac_loc) + 4;
                    }
                    else if (b != 9 && board_1[maximum_of_list(ac_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(ac_loc) - 1;
                        possible_hits[1] = maximum_of_list(ac_loc) - 2;
                        possible_hits[2] = maximum_of_list(ac_loc) - 3;
                        possible_hits[3] = maximum_of_list(ac_loc) - 4;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[3] = current_hit_1 + 3;
                        possible_hits[5] = current_hit_1 + 4;
                        possible_hits[0] = current_hit_1 - 1;
                        possible_hits[2] = current_hit_1 - 2;
                        possible_hits[4] = current_hit_1 - 3;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_2[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((cr_hits != 0) && (cr_hits != 4)) {
            if (cr_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = cr_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_2[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                current_hit_1 = cr_loc[0];
                current_hit_2 = cr_loc[1];
                var a = Math.floor((minimum_of_list(cr_loc) - 1) / 10);
                var b = (minimum_of_list(cr_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(cr_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(cr_loc) + 10;
                        possible_hits[1] = minimum_of_list(cr_loc) + 20;
                        possible_hits[2] = minimum_of_list(cr_loc) + 30;
                    }
                    else if (a != 9 && board_1[maximum_of_list(cr_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(cr_loc) - 10;
                        possible_hits[1] = maximum_of_list(cr_loc) - 20;
                        possible_hits[2] = maximum_of_list(cr_loc) - 30;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[3] = current_hit_1 + 30;
                        possible_hits[0] = current_hit_1 - 10;
                        possible_hits[2] = current_hit_1 - 20;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(cr_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(cr_loc) + 1;
                        possible_hits[1] = minimum_of_list(cr_loc) + 2;
                        possible_hits[2] = minimum_of_list(cr_loc) + 3;
                    }
                    else if (b != 9 && board_1[maximum_of_list(cr_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(cr_loc) - 1;
                        possible_hits[1] = maximum_of_list(cr_loc) - 2;
                        possible_hits[2] = maximum_of_list(cr_loc) - 3;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[3] = current_hit_1 + 3;
                        possible_hits[0] = current_hit_1 - 1;
                        possible_hits[2] = current_hit_1 - 2;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_2[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((sb_hits != 0) && (sb_hits != 3)) {
            if (sb_hits == 1) {
                var possible_hits;
                possible_hits = [];
                current_hit = sb_loc[0];
                possible_hits = compute_guesses(current_hit);
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if (board_2[possible_hits[j]] == -1) {
                        guess = possible_hits[j];
                        break;
                    }
                }
            }
            else {
                var possible_hits;
                possible_hits = [];
                current_hit_1 = sb_loc[0];
                current_hit_2 = sb_loc[1];
                var a = Math.floor((minimum_of_list(sb_loc) - 1) / 10);
                var b = (minimum_of_list(sb_loc)-1) % 10;
                if (((current_hit_1 - current_hit_2) % 10) == 0) {
                    if (a != 0 && board_1[minimum_of_list(sb_loc) - 10] == 0) {
                        possible_hits[0] = minimum_of_list(sb_loc) + 10;
                        possible_hits[1] = minimum_of_list(sb_loc) + 20;
                    }
                    else if (a != 9 && board_1[maximum_of_list(sb_loc) + 10] == 0) {
                        possible_hits[0] = maximum_of_list(sb_loc) - 10;
                        possible_hits[1] = maximum_of_list(sb_loc) - 20;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 20;
                        possible_hits[0] = current_hit_1 - 10;
                    }
                }
                else {
                    if (b != 0 && board_1[minimum_of_list(sb_loc) - 1] == 0) {
                        possible_hits[0] = minimum_of_list(sb_loc) + 1;
                        possible_hits[1] = minimum_of_list(sb_loc) + 2;
                    }
                    else if (b != 9 && board_1[maximum_of_list(sb_loc) + 1] == 0) {
                        possible_hits[0] = maximum_of_list(sb_loc) - 1;
                        possible_hits[1] = maximum_of_list(sb_loc) - 2;
                    }    
                    else {                
                        possible_hits[1] = current_hit_1 + 2;
                        possible_hits[0] = current_hit_1 - 1;
                    }
                }
                var j;
                for (j = 0; j < possible_hits.length; j++) {
                    if(possible_hits[j] > 0 && possible_hits[j] < 101)
                    {
                        if (board_2[possible_hits[j]] == -1 && possible_hits[j] >= 1) {
                            guess = possible_hits[j];
                            break;
                        }
                    }
                }
            }
        }
        else if ((ds_hits != 0) && (ds_hits != 2)) {
            var possible_hits;
            possible_hits = [];
            current_hit = ds_loc[0];
            possible_hits = compute_guesses(current_hit);
            var j;
            for (j = 0; j < possible_hits.length; j++) {
                if (board_2[possible_hits[j]] == -1) {
                    guess = possible_hits[j];
                    break;
                }
            }
        }
        else {
            var i;
            var possible_hits;
            possible_hits = [];
            if (ms_loc.length == 0) {
                possible_hits = [34, 35, 36, 37, 44, 45, 46, 47, 54, 55, 56, 57, 64, 65, 66, 67];
            }
            else {
                var target_cell;
                var flag;
                flag = false;
                while (flag != true) {
                    target_cell = ms_loc[Math.floor(Math.random() * ms_loc.length)];
                    if ((target_cell - 11) >= 1 && (target_cell - 11) <= 100 && target_cell % 10 != 1 && board_2[target_cell - 11] == -1){
                        possible_hits.push(target_cell - 11);
                    }
                    if ((target_cell - 9) >= 1 && (target_cell - 9) <= 100 && target_cell % 10 != 0 && board_2[target_cell - 9] == -1){
                        possible_hits.push(target_cell - 9);
                    }
                    if ((target_cell + 9) >= 1 && (target_cell + 9) <= 100 && target_cell % 10 != 1 && board_2[target_cell + 9] == -1){
                        possible_hits.push(target_cell + 9);
                    }
                    if ((target_cell + 11) >= 1 && (target_cell + 11) <= 100 && target_cell % 10 != 0 && board_2[target_cell + 11] == -1){
                        possible_hits.push(target_cell + 11);
                    }
                    if (possible_hits.length > 0) {
                        flag = true;
                    }
                }
            }
            guess = possible_hits[Math.floor(Math.random() * possible_hits.length)];
        }
    }
    var return_list;
    return_list = [];
    return_list[0] = who_to_hit;
    return_list[1] = guess;
    location.href = 'check_hit_comp.php?cell=' + guess + '&id1=' + id1 + '&id2=' + id2 + '&id3=' + id3 + '&B=' + who_to_hit;
}
</script>
</head>
<body bgcolor = "black"> <!-- An image is needed. Will work on that.-->
<div class = "image"></div>
<p id="something" class="above_demo">Refresh in:</p>
<p id="Timer" class = "demo"></p>
<script>
    var then = new Date().getSeconds();
    then += 6
    var x = setInterval(function()
    {
        var now = new Date().getSeconds();
        var seconds = (then - now)%10;
        if (seconds > 0)
            document.getElementById("Timer").innerHTML = seconds;
        if (distance < 0)
        {
            clearInterval(x);
            document.getElementById("Timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

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
        /*
            This php script creates a link between the player and the server getting informations from the server and displaying it on the Screen
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
            // checks if player 2 is connected or not and extracts the positions of the ships of player 1
            if($B2_id == 0)
                $result = $mysqli->query("SELECT * FROM Board_" . $B1_id);
            else
                $result = $mysqli->query("SELECT * FROM BoardUsing_" . $B1_id);
            if($result->num_rows > 0)
                    while($row = $result->fetch_assoc())
                        $Board[$row["Positions"]] = $row["Ship"];
            // $Board[] is the Array containing the positions of the ships of player 1
        for ($i=1; $i <= 10; $i++)
        {
                for ($j=10*($i-1)+1; $j <= 10*$i; $j++)
                {
                    if($Board[$j] != 0)
                    {
                        // check if there is a ship in $j position then whether is it horizontal or vertical and accordingly send the postions of the ship, size of it and orientation to a javascript function put_my_ships() which places the ships on the player 1's board to be shown during the game so that player 1 knows where he had kept his ships
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
                        else if($Board[$j] == 5 && $Board[$j+10] == 5 && $Board[$j+40] == 5)
                            echo "hahah<script>
                                    load1();
                                        function load1()
                                        {
                                            id = 5;
                                            or = \"Vertical\";
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
                        else if($Board[$j] == 4 && $Board[$j+10] == 4 && $Board[$j+30] == 4)
                            echo "h<script>
                                    load2();
                                        function load2()
                                        {
                                            id = 4;
                                            or = \"Vertical\";
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
                        else if($Board[$j] == 3 && $Board[$j+10] == 3 && $Board[$j+20] == 3)
                            echo "ha<script>
                                    load3();
                                        function load3()
                                        {
                                            id = 3;
                                            or = \"Vertical\";
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
                        else if($Board[$j] == 2 && $Board[$j+10] == 2)
                            echo "haa<script>
                                    load4();
                                        function load4()
                                        {
                                            id = 2;
                                            or = \"Vertical\";
                                            put_my_ships(id, or, " . json_encode($j) . ");
                                        }
                                </script>";
                    }
                } 
        }
    ?>
<?
    $B1_name = "Board_" . $B1_id;
    $B1_name_Using = "BoardUsing_" . $B1_id;
    if($B2_id == 0)
    {
        // if player 2 is not connected then it searches for it until it gets connected
        start:
        $result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
            if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                        {
                            // checks for none playing board which are waiting to connect to other players, except its own board, inlcuding a none playing Computer board
                            $part = explode("_", $row["TABLE_NAME"]);
                            if($B1_name != $row["TABLE_NAME"] && $part[0] == "Board")
                                $B2_name = $row["TABLE_NAME"];
                            if($part[0] == "BoardComputer")
                                $C_Name = $row["TABLE_NAME"];
                        }
                }
        mysqli_free_result($result);
        $isTouch = empty($B2_name);
            if(!isset($B2_name))
            {
                // until player 2 is connected, i.e. $B2_name is defined, a GIF showing 'Loading' will be appearing telling that the player is waiting for other players to connect
                echo "<img src = 'loading.gif' class = 'loading'>";
            }
            else
            {
                if(!isset($C_Name))
                {
                    // once player 2 is connected, this script creates a Board for the Computer using a javascript function create_comp_board() which creates a Board for the Computer according to the algorithm described for the JS function then sends the Board to the server by redirecting using JS function send_board() with arguments, Board id of player 1 and player 2
                    echo "<script>
                            create_comp_board();
                            send_board(" . $B1_id . ", " . $B2_id . ");
                    </script>";
                    echo "HDHDHD<br>";
                }
                // once Computer board is set, the two players and the computer are connected using match.php
                $parts = explode("_", $B2_name);
                $p = explode("_", $C_Name);
                echo "<script>
                        redirect();
                        function redirect()
                        {
                            location.href = 'match.php?id1=" . $B1_id . "&id2=" . $parts[1] . "&id3=" . $p[1] . "';
                        }
                    </script>";
            }
    }
?>
<?
    $Turns = "Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
    $check_Turns = True;
    $Lost = "Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
    $check_Lost = True;
    $L = 0;
    $result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
        if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                    {
                        // checks for the presence of the Lost Table and the Turns Table
                        if($Turns == $row["TABLE_NAME"])
                            $check_Turns = False;
                        if($Lost == $row["TABLE_NAME"])
                            $check_Lost = False;
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
                        // $turn takes the ongoing turn of the players from the Turns Table
                        $turn = $row['Turn'];
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
                        // $turn takes the ongoing turn of the players from the Turns Table
                        $turn = $row['Turn'];
                    }
                }            
        }
        // according to $turn, a turn image is shown beside the Player Board according to JS function show_turn() which is defined above
        if($turn == $B1_id)
            echo "<script>
                    show_turn(1);
        </script>";
        else if($turn == $B2_id)
            echo "<script>
                    show_turn(2);
        </script>";
        else if($turn == $B3_id)
            echo "<script>
                    show_turn(3);
        </script>";
        // checks which arrangement of Lost Table is present in the Database
        if($check_Lost)
        {
            $result = $mysqli->query("SELECT * FROM Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        // check which player has lost First and stores it in $L
                        if($row['Lost'] == $B1_id)
                            $L = $B1_id;
                        else if($row['Lost'] == $B2_id)
                            $L = $B2_id;
                        else if($row['Lost'] == $B3_id)
                            $L = $B3_id;
                    }
                }
        }
        else
        {
            $result = $mysqli->query("SELECT * FROM Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        // check which player has lost First and stores it in $L
                        if($row['Lost'] == $B2_id)
                            $L = $B1_id;
                        else if($row['Lost'] == $B1_id)
                            $L = $B2_id;
                        else if($row['Lost'] == $B3_id)
                            $L = $B3_id;
                    }
                }
        }
?>
<table bgcolor = "586171" class = "pos_fixed_2">
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(1, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(2, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(3, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(4, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(5, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(6, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(7, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(8, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(9, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(10, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(11, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(12, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(13, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(14, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(15, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(16, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(17, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(18, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(19, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(20, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(21, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(22, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(23, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(24, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(25, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(26, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(27, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(28, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(29, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(30, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(31, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(32, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(33, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(34, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(35, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(36, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(37, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(38, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(39, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(40, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(41, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(42, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(43, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(44, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(45, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(46, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(47, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(48, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(49, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(50, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(51, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(52, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(53, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(54, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(55, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(56, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(57, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(58, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(59, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(60, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(61, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(62, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(63, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(64, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(65, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(66, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(67, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(68, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(69, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(70, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(71, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(72, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(73, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(74, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(75, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(76, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(77, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(78, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(79, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(80, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(81, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(82, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(83, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(84, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(85, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(86, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(87, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(88, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(89, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(90, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_2(91, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(92, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(93, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(94, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(95, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(96, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(97, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(98, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(99, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_2(100, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
</table>
<center>
<table bgcolor = "586171" class = "pos_fixed_3">
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(1, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(2, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(3, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(4, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(5, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(6, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(7, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(8, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(9, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(10, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(11, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(12, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(13, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(14, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(15, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(16, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(17, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(18, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(19, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(20, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(21, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(22, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(23, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(24, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(25, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(26, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(27, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(28, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(29, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(30, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(31, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(32, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(33, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(34, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(35, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(36, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(37, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(38, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(39, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(40, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(41, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(42, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(43, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(44, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(45, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(46, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(47, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(48, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(49, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(50, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(51, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(52, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(53, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(54, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(55, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(56, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(57, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(58, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(59, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(60, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(61, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(62, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(63, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(64, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(65, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(66, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(67, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(68, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(69, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(70, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(71, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(72, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(73, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(74, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(75, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(76, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(77, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(78, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(79, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(80, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(81, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(82, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(83, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(84, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(85, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(86, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(87, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(88, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(89, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(90, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
    <tr>
        <td><input type = "button" class = "table" onclick = "check_hit_3(91, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(92, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(93, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(94, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(95, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(96, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(97, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(98, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(99, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
        <td><input type = "button" class = "table" onclick = "check_hit_3(100, <? echo $B1_id ?>, <? echo $B2_id ?>, <? echo $B3_id ?>, <? echo $turn ?>, <? echo $L ?>)"></td>
    </tr>
</table>
</center>
<?
    $Shots = "Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
    $check_Shots = True;
    // $Board_1, $Board_2, $Comp_Board are the Board before any moves were played and evetually will get updated after every move is played
    $Board_1 = [-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1];
    $Board_2 = [-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1];
    $Comp_Board = [-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1];
    $result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
        if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                    {
                        // checks for the presence of the Shots Table
                        if($Shots == $row["TABLE_NAME"])
                            $check_Shots = False;
                    }
            }
        // checks which arrangement of Shots Table is present in the Database
        if($check_Shots)
            $result = $mysqli->query("SELECT * FROM Shots_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
        else
            $result = $mysqli->query("SELECT * FROM Shots_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
        // $Hits1, $Hits2, $Hits3 stores the number of hits for each ship
        $Hits1 = [0, -1, 0, 0, 0, 0];
        $Hits2 = [0, -1, 0, 0, 0, 0];
        $Hits3 = [0, -1, 0, 0, 0, 0];
        if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    if($row["Board"] == $B1_id)
                    {
                        // the move is stored in $Board_1 and Hits per ship is updated in $Hits1 and the cell and hit is sent to a JS unction check_cell() which will update the Board on the screen with some cool images of ship hit or missed in a move
                        $Board_1[$row['Cell']] = $row['Hits'];
                        $Hits1[$row['Hits']] = $Hits1[$row['Hits']] + 1;
                        echo "<script>
                                check_cell(" . $row['Cell'] . ", " . $row['Hits'] . ", 1, " . json_encode($Board_1) . ");
                        </script>";
                    }
                    else if($row["Board"] == $B2_id)
                    {
                        // the move is stored in $Board_2 and Hits per ship is updated in $Hits2 and the cell and hit is sent to a JS unction check_cell() which will update the Board on the screen with some cool images of ship hit or missed in a move
                        $Board_2[$row['Cell']] = $row['Hits'];
                        $Hits2[$row['Hits']] = $Hits2[$row['Hits']] + 1;
                        echo "<script>
                                check_cell(" . $row['Cell'] . ", " . $row['Hits'] . ", 2, " . json_encode($Board_2) . ");
                        </script>";
                    }
                    else if($row["Board"] == $B3_id)
                    {
                        // the move is stored in $Board_3 and Hits per ship is updated in $Hits3 and the cell and hit is sent to a JS unction check_cell() which will update the Board on the screen with some cool images of ship hit or missed in a move
                        $Comp_Board[$row['Cell']] = $row['Hits'];
                        $Hits3[$row['Hits']] = $Hits3[$row['Hits']] + 1;
                        echo "<script>
                                check_cell(" . $row['Cell'] . ", " . $row['Hits'] . ", 3, " . json_encode($Board_3) . ");
                        </script>";
                    }
                }
            }
        // $Hitted_1, $Hitted_2, $Hitted_3 keeps record of how many hits a player or a board have had yet
        $Hitted_1 = 0;
        $Hitted_2 = 0;
        $Hitted_3 = 0;
        // This updates the Hit experienced variable, i.e. $Hitted_1, $Hitted_2, $Hitted_3, every time a new move is played
        // JS Function show_hits_on_side() is called when the variables are updated
        for($i = 0; $i <= 5; $i++)
        {
            if($Hits1[$i] != NULL && $i != 1 && $i != 0)
            {
                $Hitted_1 = $Hitted_1 + $Hits1[$i];
                echo "<script>
                            show_hits_on_side(1, " . $i . ", " . $Hits1[$i] . ");
                    </script>";
            }
            if($Hits2[$i] != NULL && $i != 1 && $i != 0)
            {
                $Hitted_2 = $Hitted_2 + $Hits2[$i];
                echo "<script>
                            show_hits_on_side(2, " . $i . ", " . $Hits2[$i] . ");
                    </script>";
            }
            if($Hits3[$i] != NULL && $i != 1 && $i != 0)
            {
                $Hitted_3 = $Hitted_3 + $Hits3[$i];
                echo "<script>
                            show_hits_on_side(3, " . $i . ", " . $Hits3[$i] . ");
                    </script>";
            }
        }
            $B_1 = implode(", ", $Board_1);
            $B_2 = implode(", ", $Board_2);
            $B_3 = implode(", ", $Comp_Board);
        // when the turn goes to Computer id, he computer plays, i.e. the computer algorithm is called, i.e. the JS function the_computer_plays() is called with arguments, all the Boards and the Board ids
        if($turn == $B3_id)
            echo "<script type=\"text/javascript\">
                    the_computer_plays(" . json_encode($Board_1) . ", " . json_encode($Board_2) . ", " . json_encode($Comp_Board) . ", " . $B1_id . ", " . $B2_id . ", " . $B3_id . ");
                </script>";
        $Turns = "Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
        $check_Turns = True;
        $Lost1 = "Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id;
        $Lost2 = "Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id;
        $check_Lost = True;
        $result = $mysqli->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = \"BASE TABLE\" AND TABLE_SCHEMA=\"Battleship\"");
            if($result->num_rows > 0)
            {
                    while($row = $result->fetch_assoc())
                    {
                        // checks for the presence of the Lost Table and the Turns Table
                        if($Turns == $row["TABLE_NAME"])
                            $check_Turns = False;
                        if($Lost1 == $row["TABLE_NAME"] || $Lost2 == $row["TABLE_NAME"])
                            $check_Lost = False;
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
                // when a player is lost, i.e. hitted variable goes to 14, a image pops on the lost players Board and Turn variable is skipped from the lost player and a new Table Lost Table is created which will keep a track of the player who has lost the game 1st so that other player cannot actack that players board as it will be useless and will lose a move to them
                // when the 2nd player falls, both the lost players board are overed with a 'Game Over' image and the winner Board gets the 'Winner' image. The Turn Table gets a value '0' as now no one will be playing the game further and the Game Ends at tis point
                // once the game ends a back buttons pops on the screen which will direct to the index.php after deleting all the related Tables for this game in clear_tables.php
                if($Hitted_1 == 14)
                {
                    echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                    $L = $B1_id;
                    if($row['Turn'] == $B1_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='" . $B2_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_2 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP3'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B2_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_3 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP2'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B3_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
                else if($Hitted_2 == 14)
                {
                    $L = $B2_id;
                    echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";
                    if($row['Turn'] == $B2_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='" . $B3_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_1 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP3'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                          if($row['Turn'] == $B1_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_3 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP1'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B3_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
                else if($Hitted_3 == 14)
                {
                    echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                    $L = $B3_id;
                    if($row['Turn'] == $B3_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='" . $B1_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_2 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP1'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B2_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_1 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP2'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B1_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B1_id . "_" . $B2_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
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
                if($Hitted_1 == 14)
                {
                    echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                    $L = $B1_id;
                    if($row['Turn'] == $B1_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='" . $B3_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_2 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";                        
                        echo "<img src = 'Winner.gif' class = 'WinnerP3'>'";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B2_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_3 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP2'>'";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B3_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
                else if($Hitted_2 == 14)
                {
                    echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";
                    $L = $B2_id;
                    if($row['Turn'] == $B2_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='" . $B1_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_1 == 14)
                    {
                        echo "<img src = 'Winner.gif' class = 'WinnerP3'>'";
                        echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B1_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_3 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP1'>'";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B3_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
                else if($Hitted_3 == 14)
                {
                    echo "<img src = 'GameOver.gif' class = 'GameOverP3'>";
                    $L = $B3_id;
                    if($row['Turn'] == $B3_id)
                    {
                        $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='" . $B2_id . "'");
                        if($check_Lost)
                            $mysqli->query("CREATE TABLE Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost int NOT NULL)");
                        $result = $mysqli->query("SELECT * FROM Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id);
                        if($result->num_rows == 0)
                            $mysqli->query("INSERT INTO Lost_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " (Lost) VALUES ('" . $L . "')");
                        echo "<meta http-equiv=\"refresh\" content=\"0\">";
                    }
                    if($Hitted_2 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP2'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP1'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B2_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                    else if($Hitted_1 == 14)
                    {
                        echo "<img src = 'GameOver.gif' class = 'GameOverP1'>";
                        echo "<img src = 'Winner.gif' class = 'WinnerP2'>";
                        echo '<form method = "get" action = "index.php" class = "center">';
                        echo '<input type = "image" src = "Back_to_menu.png" height = "100" width = "200">';
                        echo '</form>';
                        if($row['Turn'] == $B1_id)
                        {
                            $mysqli->query("UPDATE Turns_" . $B2_id . "_" . $B1_id . "_" . $B3_id . " SET Turn='0'");
                            echo "<meta http-equiv=\"refresh\" content=\"0\">";
                        }
                    }
                }
            }
        }
    }
?>
</body>
</html>