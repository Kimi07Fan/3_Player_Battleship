WELCOME TO 3 PLAYER BATLLESHIP!

This is a classic manifestation of the age old game of battleship, but with the twist of an extra player! It is played over online multiplayer after setting up the game on a local host. 

For learning the process installation of the server, open INSTALLME.txt and follow the steps.
For learning how to connect to a local server after installation of server, open PLAYME.txt and follow the steps. 

This file contains how the game works, the purpose of each file, and the functions which are present in each file. For greater details of any particular function, open the source code to find there to be detailed comments above each function. 

This project consists of many html and php files.

1) index.php
  It is the page which opens up when a person opens up the desired folder on the document. This contains 2 buttons, one which says "Start", and the other which says "How to play". Both of these are button elements in the form of an image. These buttons, upon clicking, redirect the person:
Buttons:-
  Start: Directs the user to the setup.html page
  How to play: Directs the user to the htp.html page.
PHP Function:-
  When the person loads this page, a signal is sent to the server to check if the Battleship database is already present or not. If it is not, then it creates one, otherwise it does nothing. 

2) htp.html
  This is the page which opens up when a "How to play" button is pressed. It displays a set of rules, written in HTML (and CSS). There is one button which goes directs the user back to the index page. 
Buttons:-
  Back: Directs the user back to the index.php page

3) Setup.html
  This is the page which opens up when the user presses the start button. This page loads up a board in the centre along with a panel of buttons on the left of the board. This is the page where the user sets up his ships in position. These positions are then hidden away from other users when the multiplayer game starts. 
Buttons:-
  Change Orientation: Changes the orientation of a particular ship from Vertical to Horizontal and Back. The current orientation is displayed further down in the panel, in white text. 
  Aircraft_Carrier (image, ship of length 5): on clicking this button, the page recognises that the user wishes to place his aircraft carrier on the board next.
  Cruiser (image, ship of length 4): on clicking this button, the page recognises that the user wishes to place his cruiser on the board next.
  Submarine (image, ship of length 3): on clicking this button, the page recognises that the user wishes to place his submarine on the board next.
  Destroyer (image, ship of length 2): on clicking this button, the page recognises that the user wishes to place his destroyer on the board next.
  Back to menu: Directs the user back to the index.php page
  How to play: Directs the user to the htp.html page.
  Let's go: Directs the user to the play_area.php page. This, however, first sends certain to the server by using the php file send_board.php _____________________________________________.
JavaScript Variables:-
  Passing: an array of length 100 which contains the value of every cell. 
    0 => No ship
    2 => Destroyer present
    3 => Submarine present
    4 => Cruiser present
    5 => Submarine present
  Completed: an array of max length 4. This is maintained to ensure that a player does not put the same ship on the board twice. 
  Orient: Stores the default orientation. Changes with the call of the function change_ornt, which is called when the Change Orientation button is pressed. 
  Selected: stores the ship which the user wants to place next. Starts out as a blank string
JavaScript Functions:-
  change_ornt(): Changes the value of the variable orient from Horizontal to Vertical and back. It also ensures that this change is visible to the user by changing it on the html page. 
  select_ac(): Changes the value of the variable selected to "ac", thereby ensuring that the user's next ship is the aircraft carrier. 
  select_cr(): Changes the value of the variable selected to "cr", thereby ensuring that the user's next ship is the cruiser. 
  select_sb(): Changes the value of the variable selected to "sb", thereby ensuring that the user's next ship is the submarine. 
  select_ds(): Changes the value of the variable selected to "ds", thereby ensuring that the user's next ship is the destroyer. 
  place(a, b): given the orientation, ship, and which cell the user wishes to place the ship, the function will check if it is a valid placement, then it goes ahead to insert the ship on the board. Otherwise no visible action takes place. 
  check(): It checks if the user has placed all the ships before going to click let's play. This function is called when the mouse hovers over the let's play button. If the user has not placed all his ships, then an alert pops up, thereby not allowing the player to click on that button. 


4) play_area.php
  This is the most important file in the entirety of the project. This is where the battle between the players and the computer commences (and also, ends). It performs multiple tasks with the help of the php files which are described later on in the file.
JavasScript Functions:-
  place(a, b, selected, orient): given the following values, it inserts the ship onto the screen of the user. 
  put_my_ships(ship_id, orient, cell_number): It places a given ship of the user (not of the opponent) so that the user can see where his ship has been placed. It calls the place function inside it.
  hit_or_miss(a, b, hit, id, last_hit): For the 3 boards, it places the Miss cell image over the cell where there is no ship and a hit cell image over the cells which has been hit and there is a ship.
  check_cell(cell_number, h_or_m, player_id, last_hit): It does a small numerical conversion and then calls hit_or_miss in the given format. 
  show_turn(id): It presents the image which gives the indication of which player's move is next. 
  ch2_delay(cell, id1, id2, id3, turn, lost): Calls the php file check_hit.php _________________________ to check whether a given cell in the board of player 2 has a ship in it or not. 
  ch3_delay(cell, id1, id2, id3, turn, lost): Calls the php file check_hit.php _________________________ to check whether a given cell in the board of player 2 has a ship in it or not. 
  check_hit_2(cell, id1, id2, id3, turn, lost): It shows the gif-image of a cell getting blown up by the hit, when a cell of player 2 is hit.
  check_hit_3(cell, id1, id2, id3, turn, lost): It shows the gif-image of a cell getting blown up by the hit, when a cell of player 3 is hit.
  show_hits_on_side(player_id, ship_id, no_of_hits): It shows the number of hits that each player's ships have taken on the side of their respective boards. 
  check_validity_and_place(ship_id, orient, a, b): This function performs the same function as the place(a, b) function in the file setup.html. This is done as a randomly generated computer board must be created. 
  create_comp_board(): it carries out with the generation of the random (with specific parameters) board. At the end of this function it returns an array which is similarly formatted to the "passing" array in the file setup.html.
  evaluate_board(board): given a "board" (in the array format, similar to "passing" in setup.html), it checks how many times any given ship has been hit, and if any, then in which positions they have been hit. 
  compute_guesses(cell_number): returns an array which contains the cell numbers which surround the given cell. 
  minimum_of_list(list): returns the minimum element of the list.
  maximum_of_list(list): returns the maximum element of the list.
  the_computer_plays(board_1, board_2, computer_board, id1, id2, id3): It is the code which calculates the next move of the computer. 
JavaScript Variables:-
  Passing: same format as that of the "passing" array from setup.html, only this time it contains the co-ordinates of the computer's board. 
  Then: contains the time at which the program must be refreshed.
  Now: contains the current time. 

5) send_board.php
  This php file is taking the board created by players as an Array, '$Array', with Board Cell Numbers Ranging from 1-100 as its keys and Ship sizes as its Values. It stores the Array as a Table, 'Board_<id>', in the Database 'Battleship', where <id> is a random number generated by a Random function which is not part of other Board present in the Database. Then it Redirects to play_area.php with unique board ids a variables

6) send_comp_board.php
  This php file takes an Array of Board made for the Computer by the Computer Algorithm and sends it to the Database 'Battleship' making a unique id for the Computer board as well which is not part of other Boards present in the Database

7) match.php
  This php file connects the two Players and the Computer Board together so that the can play against each other. This php file takes the unique Board id as input variables and sends them to both the players so that they both play against each other along with the Commputer. This php file creates two new Tables which stores the moves played by each of the player and the turn of the player to play the move next

8) check_hit.php
  This php file checks the move played by a player on other board whether it is a hit or a miss. This php file stores the move to the corresponding connected table that stores all its moves and changes the Turn variable to the next player in the queue

9) check_hit_comp.php
  This php file checks the move played by the computer on other player board whether it is a hit or a miss. This php file stores the move to the corresponding connected table that stores all its moves and changes the Turn variable to the next player in the queue

10) clear_tables.php
  This php file Deletes all the Tables related to this game so that the Database is not crowded
__________________________________________________
SUDARSHAAN K. DAS
Please complete this document by adding the php functions of each file mentioned here (and also those which were not mentioned here.) 
__________________________________________________




























