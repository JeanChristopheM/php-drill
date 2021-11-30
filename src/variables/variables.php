<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    
    <h2>Displaying Variables</h2>
        <?php
        
        $name = 'jc';
        $age = 31;
        $eyeColor = 'brown';
        $family = array(
        0 => 'Benoît',
        1 => 'Martine',
        2 => 'Gregory',
        3 => 'Anne-Sophie'
        );
        $isHungry = true;
        ?>
        <p>Hi! My name is <?php echo $name; ?></p>
        <p>I am <?php echo $age; ?> years old</p>
        <p>My eyes are <?php echo $eyeColor; ?></p>
        <p>My mother's name is <?php echo $family[1] ?></p>
        <p>
        <?php 
        if ($isHungry) {
            echo 'I am hungry';
        } else {
            echo 'I am not hungry';
        }
        ?>
        </p>
    
    
    
    <h2 class="heading">Conditionals through array</h2>
        <?php 
        $possible_states = ['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];
    
        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[3]; 
    
        if($room_filthiness == 'health hazard'){
            echo "Yuk, Room is Disgusting! Let's clean it up NOW!";
        } else if( $room_filthiness == 'filthy' ){
            echo "Yuk, Room is filthy : let's clean it up as soon as possible!";
        } else if ($room_filthiness == 'dirty') {
            echo 'Room is dirty, better clean it up !';
        } else if ($room_filthiness == 'immaculate') {
            echo 'WOW, your room is AMAZINGLY clean ! Congrats';
        } else {
            echo "Nothing to do, room is neat.";
        }
        ?>
    
    <h2 class="heading">Advanced conditionals</h2>
        <?php 
        $hours = idate("H"); // How to get the current time in PHP ? Google is your friend ;-)
        $minutes = idate("i");
        // Test the value of $now and display the right message according to the specifications.
        echo 'Current time : '.$hours.':'.$minutes;
        echo '<br /><br />';
        echo 'Good ';
        if ($hours >= 5 && $hours <= 8) {
            echo 'morning !';
        } else if ($hours >= 9 && $hours <= 11) {
            echo 'day !';
        } else if ($hours >= 12 && $hours <= 15) {
            echo 'afternoon !';
        } else if ($hours >= 16 && $hours <= 20) {
            echo 'evening !';
        } else {
            echo 'night !';
        }
        ?>
    
    <h2><a href="/">BACK</a></h2>
</body>
</html>