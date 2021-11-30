<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuse-O-Matic</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="app">
        <h1>Excuse-O-Matic</h1>
        <form method="get">
            <div class="question">
                <p class="form_question">Name of the child ⤵️</p>
                <input type="text" name="name" id="name">
            </div>
            <div class="question">
                <p class="form_question">Gender ?</p>
                <div class="radio_options">
                    <input type="radio" name="gender" id="genderMale" value="male">
                    <label for="genderMale">Male</label>
                    <input type="radio" name="gender" id="genderFemale" value="female">
                    <label for="genderFemale">Female</label>
                </div>
            </div>
            <div class="question">
                <p class="form_question">Name of the teacher ⤵️</p>
                <input type="text" name="teacherName" id="teacherName">
            </div>
            <div class="question">
                <p class="form_question">Reason of absence ?</p>
                <div class="radio_options">
                    <input type="radio" name="reason" id="illness" value="illness">
                    <label for="illness">Illness</label>
                    <input type="radio" name="reason" id="death" value="death">
                    <label for="death">Death of a pet</label>
                    <input type="radio" name="reason" id="activity" value="activity">
                    <label for="activity">Extra curricular activity</label>
                    <input type="radio" name="reason" id="extra" value="extra">
                    <label for="extra">Other</label>
                </div>
            </div>
            <div class="button_container"><button>Generate Excuse</button></div>
        </form>
        <div class="results">
            <?php
                $son = ['son', 'daughter'];
                $he = ['he', 'she'];
                $his = ['his', 'her'];
                if (isset($_GET['name']) && !empty($_GET['name']) && 
                    isset($_GET['reason']) && !empty($_GET['reason']) && 
                    isset($_GET['teacherName']) && !empty($_GET['teacherName']) && 
                    isset($_GET['gender']) && !empty($_GET['gender'])) 
                    {
                        $name = $_GET['name'];
                        $reason = $_GET['reason'];
                        $teacherName = $_GET['teacherName'];
                        $gender = ($_GET['gender'] == 'male') ? 0 : 1;
                        $space = '<br />';
                        switch ($reason) {
                            case 'illness':
                                echo '<h2>Results</h2>';
                                echo 'Dear Mr(s) '.$teacherName.','.$space;
                                echo 'My '.$son[$gender].' '.$name.' will not be able to attend classes today.'.$space;
                                echo 'His state of health today justifies his abscence. The family doctor has advised a rest period of a couple of days.'.$space;
                                echo 'We will provide the school with a certificate via '.$name.' when he gets back to school.'.$space;
                                echo 'For any more information, please contact me.'.$space.$space;
                                echo 'Our most sincere salutations,'.$space;
                                echo $name.' parents.';
                                break;
                            case 'death':
                                echo '<h2>Results</h2>';
                                echo 'Dear Mr(s) '.$teacherName.','.$space;
                                echo 'My '.$son[$gender].' '.$name.' will not be able to attend classes today.'.$space;
                                echo 'Indeed, '.$he[$gender].' is experiencing '.$his[$gender].' first grief as '.$he[$gender].' lost '.$his[$gender].' pet cat.'.$space;
                                echo 'We apologize for the inconvience '.$his[$gender].' abscence could cause.'.$space;
                                echo 'For any more information, please contact me.'.$space.$space;
                                echo 'Our most sincere salutations,'.$space;
                                echo $name.' parents.';
                                break;
                            case 'activity':
                                break;
                            case 'extra':
                                break;
                            default:
                                echo 'ERROR';
                        }



                        
                    }
            ?>
        </div>
    </div>
</body>
</html>