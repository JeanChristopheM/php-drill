<?php
    require_once('request.php');
    if (!isset($_GET['code']) || empty($_GET['code'])) {
        echo "Invalid url";
        exit;
    }
    $code = $_GET['code'];
    try {
        $q = $db -> prepare("SELECT productCode, productName, buyPrice FROM products WHERE productCode = :productCode");
        $q->bindParam(':productCode', $code, PDO::PARAM_STR);
        $q->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }
    $product = $q->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['productName']; ?></title>
</head>
<body>
    <?php if($product) : ?>
        <h1><?php echo $product['productName'] ?></h1>
        <ul>
            <li>Price : <?php echo $product['buyPrice'] ?>$</li>
            <li>Product Code : <?php echo $product['productCode'] ?></li>
        </ul>
    <?php endif; ?>
    <?php if(!$product) : ?>
        <p>Wrong product code. Please try again.</p>
    <?php endif; ?>

    
</body>
</html>