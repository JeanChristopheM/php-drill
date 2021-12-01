<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $me = array(
            'firstname' => 'Jean-Christophe',
            'lastname' => 'Molhant',
            'favoriteSeason' => 'Summer',
            'likesSoccer' => false,
            'age' => 31,
            'favoriteMovies' => array('The sound of metal', 'Lord of the Rings', 'Brother Bear'),
            'hobbies' => array('Gaming', 'Coding', 'Building stuff'),
        );
        
        $mother = array(
            'firstname' => 'Martine',
            'lastname' => 'Vanham',
            'favoriteSeason' => 'Winter',
            'likesSoccer' => false,
            'age' => 57,
            'favoriteMovies' => array('None'),
            'hobbies' => array('Cooking', 'Tending to the animals', 'Washing her hands'),
        );
        $me['mother'] = $mother;
        $me['hobbies'][] = 'Taxidermy';
        $me['lastname'] = 'Durand';
    ?>
    <pre>
        Me : 
        <?php print_r($me); ?>
    </pre>
    <p><?php echo 'The $me array has '.count($me).' keys.'; ?></p>
    <p><?php echo 'My mom has '.count($mother['hobbies']).' hobbies.'; ?></p>
    <p><?php echo 'I have '.count($me['hobbies']).' hobbies.'; ?></p>
    <p><?php echo 'Together, we have '.count($mother['hobbies']) + count($me['hobbies']).' hobbies.'; ?></p>
    <?php
        $soulmate = array(
            'firstname' => 'Jeanne',
            'lastname' => 'Doe',
            'favoriteSeason' => 'Spring',
            'likesSoccer' => false,
            'age' => 30,
            'favoriteMovies' => array('Blacksheep', 'Star wars', 'Il faut sauver le soldat Ryan'),
            'hobbies' => array('Painting', 'Gaming', 'Singing'),
        );
    ?>
    <pre>
        Soulmate : 
        <?php print_r($soulmate); ?>
    </pre>
    <p><?php echo "Possible outcome of baby's hobbies by intersection : " ?></p>
    <pre><?php echo print_r(array_intersect($me['hobbies'], $soulmate['hobbies'])) ?></pre>
    <p><?php echo "Possible outcome of baby's hobbies by fusion : " ?></p>
    <pre><?php echo print_r(array_unique(array_merge($me['hobbies'], $soulmate['hobbies']))) ?></pre>
    <h2><a href="/">BACK</a></h2>
</body>
</html>