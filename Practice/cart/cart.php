<?php
// start the session
session_start();

// get the session variable values
$quantity = $_SESSION["quantity"];
$unitPrice = $_SESSION["UnitPrice"];
$price = $_SESSION["price"];


if (isset($_POST['submit'])) {
    $updatePrice = $_POST['prc'];
    $updateQuantity = $_POST['qnt'];

    $_SESSION["quantity"] = "$updateQuantity";
    $_SESSION["price"] = "$updatePrice";

    // Reload the page to display updated data
    echo '<script>window.location.href = "' . $_SERVER['PHP_SELF'] . '";</script>';
}

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

        .update-btn {
            margin-top: 15px;
            display: none;
        }
    </style>
</head>

<body>

    <section class="cart-body">
        <form class="cart" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="cart-quantity">
                <span class="btn" id="decrease-btn" onclick="decreaseQuantity()">-</span>
                <input type="number" id="quantityInput" name="qnt" value="<?php echo $quantity; ?>" />
                <span class="btn" id="increase-btn" onclick="increaseQuantity()">+</span>
            </div>
            <div class="cart-price">
                <input type="number" min="1" id="priceInput" name="prc" value="<?php echo $price; ?>" />
            </div>

            <button name="submit" type="submit" class="update-btn">Update Cart</button>
        </form>
        <aside class="current-value">
            <span>Session Data:</span>
            <p>Quantity: <?php echo $quantity; ?></p>
            <p>Unit Price: <?php echo $unitPrice; ?></p>
            <hr>
            <p>Total Price: <?php echo $price; ?></p>
        </aside>
    </section>

    <script>
        var updateButtons = document.getElementsByClassName("update-btn");


        function increaseQuantity() {
            let qty = parseInt(document.getElementById("quantityInput").value);
            qty += 1;
            document.getElementById("quantityInput").value = qty;

            let price = parseFloat(<?php echo $unitPrice; ?>) * qty;
            document.getElementById("priceInput").value = price.toFixed();



            // Loop through all found buttons and set their display property to 'block'
            for (var i = 0; i < updateButtons.length; i++) {
                updateButtons[i].style.display = 'block';
            }
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

            // Loop through all found buttons and set their display property to 'block'
            for (var i = 0; i < updateButtons.length; i++) {
                updateButtons[i].style.display = 'block';
            }
        }
    </script>
</body>

</html>