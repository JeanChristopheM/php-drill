<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Simple form</h2>
        <form method="get">
            <label for='ageInput'>Please enter your age : </label>
            <input type="text" name="ageInput" id="ageInput">
            <button type="submit">Submit</button>
        </form>
        <?php
        if (isset($_GET['ageInput'])) {
            $age = $_GET['ageInput'];
            if ($age < 12) {
                echo 'Hello kiddo !';
            } else if ($age <= 18) {
                echo 'Hello Teenager !';
            } else if ($age <=115) {
                echo 'Hello Adult !';
            } else {
                echo 'Wow ! Still alive ? Are you a robot, like me ? Can I hug you ?';
            }
        }
        ?>
    
    <h2 class="heading">Advanced form</h2>
        <form method='get'>
            <label for='age'>Please enter your age : </label>
            <input type="text" name="age" id="ageInput">
            
            <p>
                Man or Woman ?
                <input type="radio" name="gender" id="maleInput" value="male">
                <label for="maleInput">Male</label>
                <input type="radio" name="gender" id="femaleInput" value="female">
                <label for="femaleInput">Female</label>
            </p>
        
            <br />
            <?php
            
            if (isset($_GET['age']) && !empty($_GET['age'])) {
                $gender=" mister ";
                $age = $_GET['age'];
                if ($_GET['gender'] == "female") {
                    $gender = ' Miss ';
                }
                if ($age < 12) {
                    echo 'Hello'.$gender.'kiddo !';
                } else if ($age <= 18) {
                    echo 'Hello'.$gender.'Teenager !';
                } else if ($age <=115) {
                    echo 'Hello'.$gender.'Adult !';
                } else {
                    echo 'Wow ! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            }
            ?>
            <br />
            <button type="submit">Submit</button>
        </form>
        
    <h2 class="heading">Advanced-ER form</h2>
        <form method='get'>
            <label for='age2'>Please enter your age : </label>
            <input type="text" name="age2" id="ageInput">
            
            <p>
                Man or Woman ?
                <input type="radio" name="gender2" id="maleInput2" value="male">
                <label for="maleInput2">Male</label>
                <input type="radio" name="gender2" id="femaleInput2" value="female">
                <label for="femaleInput2">Female</label>
            </p>

            <p>
                Do you speak English ? 
                <input type="radio" name="english" id="yesInput" value="true">
                <label for="yesInput">YES</label>
                <input type="radio" name="english" id="noInput" value="false">
                <label for="noInput">NO</label>
            </p>
            <br />
            <?php
            
            if (isset($_GET['age2']) && !empty($_GET['age2'])) {
                $message= "Hello";
                $gender=" mister ";
                $age = $_GET['age2'];
                if ($_GET['gender2'] == "female") {
                    $gender = ' Miss ';
                }
                if ($_GET['english'] == "false") {
                    $message = 'Aloha';
                }
                if ($age < 12) {
                    echo $message.$gender.'kiddo !';
                } else if ($age <= 18) {
                    echo $message.$gender.'Teenager !';
                } else if ($age <=115) {
                    echo $message.$gender.'Adult !';
                } else {
                    echo 'Wow ! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            }
            ?>
            <br />
            <button type="submit">Submit</button>
        </form>
        
    <h2 class="heading">Soccer Team</h2>
        <form method="get">
            <label for='soccerAge'>Please enter your age : </label>
            <input type="text" name="soccerAge" id="soccerAge">
            <p>
                Man or Woman ?
                <input type="radio" name="soccerGender" id="soccerGenderMale" value="male">
                <label for="soccerGenderMale">Male</label>
                <input type="radio" name="soccerGender" id="soccerGenderFemale" value="female">
                <label for="soccerGenderFemale">Female</label>
            </p>
            <label for='soccerName'>Please enter your name : </label>
            <input type="text" name="soccerName" id="soccerName">
            <br />
            <br />
            <br />
            <?php
                if (isset($_GET['soccerAge']) && !empty($_GET['soccerAge'])) {
                    $name = $_GET['soccerName'];
                    $age = $_GET['soccerAge'];
                    $greetings= "Hello";
                    $gender=" Mister ";
                    if ($_GET['soccerGender'] == "female") {
                        $gender = ' Miss ';
                    }
                    $response = $greetings.$gender.$name.'.';
                    $rest = ' Sorry you don\' fit the criteria';
                    if ($age >= 21 && $age <= 40 && $_GET['soccerGender'] == 'female') {
                        $rest = ' Welcome to the team !';
                    }
                    $response .= $rest;
                    echo $response;
                }
            ?>
            <br />
            <button type="submit">Submit</button>
        </form>
    <h2 class="heading">"School Sucks"</h2>
        <form method="get">
            <label for="noteInput">Select a note : </label>
            <select name="noteInput" id="noteInput">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            <br />
            <?php
                if (isset($_GET['noteInput'])) {
                    $note = $_GET['noteInput'];
                    $message='';
                    if ($note <= 4) $message = "This work is really bad. What a dumb kid! ";
                    if ($note >= 5 && $note <= 9) $message = "This is not sufficient. More studying is required.";
                    if ($note == 10) $message = "Barely enough !";
                    if ($note >= 11 && $note <= 14) $message = "Not bad !";
                    if ($note >= 15 && $note <= 18) $message = "Bravo, bravissimo !";
                    if ($note > 18) $message = "Too good to be true : confront the cheater !";
                    echo $message;
                }
            ?>
            <br />
            <button type="submit">Submit</button>
        </form>
    <h2><a href="/">BACK</a></h2>
    <h2><a href="/forms/forms.php">RESET FORMS</a></h2>
</body>
</html>