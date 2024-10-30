<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$products = array(
    1 => array("name" => "Ürün 1", "price" => 100, "image" => "images/product1.jpg", "description" => "Bu ürün 1'in açıklamasıdır."),
    2 => array("name" => "Ürün 2", "price" => 150, "image" => "images/product2.jpg", "description" => "Bu ürün 2'nin açıklamasıdır."),
    3 => array("name" => "Ürün 3", "price" => 200, "image" => "images/product3.jpg", "description" => "Bu ürün 3'ün açıklamasıdır."),
    4 => array("name" => "Ürün 4", "price" => 200, "image" => "images/product3.jpg", "description" => "Bu ürün 3'ün açıklamasıdır."),
);

$message = "";

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
    
    if (isset($products[$product_id])) {
        if (!isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = $quantity;
        } else {
            $_SESSION['cart'][$product_id] += $quantity;
        }
        $message = "Ürün sepete eklendi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ürün Listesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }
        img {
            max-width: 100px;
            margin-right: 20px;
        }
        .product-details {
            flex-grow: 1;
        }
        form {
            display: inline;
        }
        .btn {
            padding: 5px 10px;
            background: #5cb85c;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #4cae4c;
        }
        .cart-link {
            display: block;
            text-align: center;
            margin: 20px 0;
            text-decoration: none;
            color: #5cb85c;
            font-size: 18px;
        }
        .cart-link:hover {
            color: #4cae4c;
        }
        .message {
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ürün Listesi</h1>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <ul>
            <?php foreach ($products as $id => $product): ?>
                <li>
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <div class="product-details">
                        <strong><?php echo $product['name']; ?></strong> - <?php echo $product['price']; ?> TL
                        <p><?php echo $product['description']; ?></p>
                        <form method="post" action="index2.php">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            Miktar: 
                            <input type="number" name="quantity" value="1" min="1">
                            <input type="submit" name="add_to_cart" value="Sepete Ekle" class="btn">
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="cart.php" class="cart-link">Sepeti Görüntüle</a>
    </div>
</body>
</html>
