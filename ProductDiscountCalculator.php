<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculate</title>
    <style>
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Product Description: <input type="text" name="product"  size="10"/><br>
    List Price: <input type="text" name="price" size="10"/><br>
    Discount Percent: <input type="text" name="percent"  size="10"/><br>
    <input type="submit" name="submit" value="Calculate"/>
</form>
<?php
$product = $_POST['product'];
$price = $_POST['price'];
$percent = $_POST['percent'];
    $amount =$price * $percent * 0.1;
    echo number_format($amount,2)."<br>";


?>

</body>
</html>
<?php
