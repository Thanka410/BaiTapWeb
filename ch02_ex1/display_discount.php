<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $product_description = $_POST["product_description"];
            $list_price = floatval($_POST["list_price"]);
            $discount_percent = floatval($_POST["discount_percent"]);

            $discount_amount = $list_price * ($discount_percent / 100);
            $discounted_price = $list_price - $discount_amount;            
        }
        ?>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>  

        <label>List Price:</label>
        <span><?php echo $list_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent.'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount . '$';?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discounted_price . '$'; ?></span><br>
    </main>
  
</body>
</html>