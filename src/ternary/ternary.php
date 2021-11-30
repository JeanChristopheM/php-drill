<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Simple ternary expression</h2>
        <form method="get">
            <select name="gender" id="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <button>Submit</button>
            <?php
                if (isset($_GET['gender']) && !empty($_GET['gender'])) {
                    $gender = $_GET['gender'];
                    $hello = ($gender == 'M') ? 'Hey there mister male' : 'Hey there mister female';
                    echo $hello;
                }
            ?>
        </form>
    <h2>GIF displayer</h2>
        <form method="get">
            <p>
                Are you a human, a cat or a unicorn ? 
                <input type="radio" name="species" id="human" value="human">
                <label for="human">human</label>
                <input type="radio" name="species" id="cat" value="cat">
                <label for="cat">cat</label>
                <input type="radio" name="species" id="unicorn" value="unicorn">
                <label for="unicorn">unicorn</label>
            </p>
            <button>Submit</button>
            <?php
                if (isset($_GET['species'])) {
                    
                    switch ($_GET['species']) {
                        case 'human':
                            echo '<div style="width:200px;height:200px;position:relative;"><iframe src="https://giphy.com/embed/AEsUINFBsRVN6" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
                            break;
                        case 'cat':
                            echo '<div style=width:200px;height:200px;position:relative;"><iframe src="https://giphy.com/embed/3o6Zt481isNVuQI1l6" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
                            break;
                        default: 
                            echo '<div style="width:200px;height:200px;position:relative;"><iframe src="https://giphy.com/embed/wxZVenBE9msRq" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
                    }
                }
                ?>
        </form>
    <h2><a href="/">BACK</a></h2>
    <h2><a href="/ternary/ternary.php">RESET FORMS</a></h2>
</body>
</html>