<?php
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Accessories.php';
    require_once __DIR__ . '/Clothing.php';

    $luca = new User('Luca', 'Torre','18','lucatorre@gmail.com');

    try {
        $wallet = new Accessories('Armani wallet', 'AJ');
    } catch(Exception $e) {
        echo 'maintenance';
        die();
    }
    try {
        $jeans = new Clothing('Levi\'s Jeans', 'Le');
    } catch(Exception $e) {
        die();
    }

    // Adding products to cart 
    $luca->addToCart($wallet);
    $luca->addToCart($jeans);

    // Getting cart and sum of price
    $cart_price_sum = $luca->getTotalPrice();
    $cart = $luca->getCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'il carrello di ' . $luca->getFullName() . ' :'; ?></h1>

    <!-- Stampo ogni prodotto  -->
    <?php foreach($cart as $product) { ?>
        <div class="product">
            <h2><?php echo $product->name ?></h2>
            <div class="price"><?php echo $product->price ?></div>
        </div>
    <?php } ?>

    <hr>

    <div>Totale: <?php echo $cart_price_sum ?></div>

</body>
</html>