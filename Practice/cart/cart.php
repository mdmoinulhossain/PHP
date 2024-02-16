<?php
// start the session
session_start();

// get the session variable values
$quantity = $_SESSION["quantity"];
$unitPrice = $_SESSION["UnitPrice"];
$price = $_SESSION["price"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <style>
        .btn {
            padding: 5px;
            border: 1px solid #000;
        }

        .btn:hover {
            cursor: pointer;
        }

        .cart-body {
            display: flex;
            justify-content: space-between;
        }

        .cart-price {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <section class="cart-body">
        <aside class="cart">
            <div class="cart-quantity">
                <span class="btn" id="decrease-btn" onclick="decreaseQuantity()">-</span>
                <input type="number" id="quantityInput" name="qnt" value="<?php echo $quantity; ?>" />
                <span class="btn" id="increase-btn" onclick="increaseQuantity()">+</span>
            </div>
            <div class="cart-price">
                <input type="number" min="1" id="priceInput" name="prc" value="<?php echo $price; ?>" />
            </div>
        </aside>
        <aside class="current-value">
            <span>Session Data:</span>
            <p>Quantity: <?php echo $quantity; ?></p>
            <p>Unit Price: <?php echo $unitPrice; ?></p>
            <hr>
            <p>Total Price: <?php echo $price; ?></p>
        </aside>
    </section>

    <script>
        var increaseBtn = document.getElementById("increase-btn");
        var decreaseBtn = document.getElementById("decrease-btn");

        function increaseQuantity() {
            let qty = parseInt(document.getElementById("quantityInput").value);
            qty += 1;
            document.getElementById("quantityInput").value = qty;

            let price = parseFloat(<?php echo $unitPrice; ?>) * qty;
            document.getElementById("priceInput").value = price.toFixed();
        }

        function decreaseQuantity() {
            let qty = parseInt(document.getElementById("quantityInput").value);
            if (qty > 1) {
                qty -= 1;
            }
            document.getElementById("quantityInput").value = qty;

            let unitPrice = parseFloat(<?php echo $unitPrice; ?>);
            let price = unitPrice * qty;
            document.getElementById("priceInput").value = price.toFixed();
        }
    </script>
</body>

</html>