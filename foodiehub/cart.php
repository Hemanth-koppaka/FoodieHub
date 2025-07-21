<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_POST['add_to_cart'])) {
    $_SESSION['cart'][] = [
        'id' => $_POST['food_id'],
        'name' => $_POST['name'],
        'price' => $_POST['price']
    ];
}

if (isset($_GET['remove'])) {
    unset($_SESSION['cart'][$_GET['remove']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fefefe;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cart-container {
            width: 90%;
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #28a745;
        }

        .cart-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .remove-link {
            color: #d9534f;
            text-decoration: none;
            font-weight: bold;
        }

        .remove-link:hover {
            text-decoration: underline;
        }

        .total {
            font-size: 18px;
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="cart-container">
    <h2>Your Cart</h2>

    <?php
    if (empty($_SESSION['cart'])) {
        echo "<p>🛒 Your cart is currently empty.</p>";
    } else {
        $total = 0;
        foreach ($_SESSION['cart'] as $i => $item) {
            echo "<div class='cart-item'>
                    <span><b>" . htmlspecialchars($item['name']) . "</b> - ₹" . $item['price'] . "</span>
                    <a class='remove-link' href='?remove=$i'>Remove</a>
                  </div>";
            $total += $item['price'];
        }
        echo "<div class='total'>Total: ₹$total</div>";
    }
    ?>
</div>

<a href="menu.php" class="back-link">← Back to Menu</a>

</body>
</html>
