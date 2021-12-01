<?php
    $text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
    $textByPonctuation = explode(',', $text);
    var_dump($textByPonctuation);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h3>Text Shuffler</h3>
    <h4>Original text :</h4>
    <p><?=$text?></p>
    <h4>Scrambled text :</h4>
    <p>placeholder</p>
    <h2><a href="/">BACK</a></h2>
</body>
</html>