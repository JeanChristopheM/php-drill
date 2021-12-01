<?php

    require_once('request.php');
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $q = $db -> prepare("SELECT productName, productCode FROM products");
        $q->execute();
        $products = $q->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
</head>
<body>
    <h2><a href="/">BACK</a></h2>
    <ol>
        <?php
            foreach ($products as $product) {
                echo '<li>
                    <a href="product.php?code='.$product["productCode"].'">
                        <h3 style="display:inline;">'.$product["productName"].'</h3>
                    </a>
                </li>';
            } 
        ?>
    </ol>
</body>
</html>