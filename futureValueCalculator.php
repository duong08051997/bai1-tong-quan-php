<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future value calculator</title>
    <style>
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Inventment amount :<input type="text" name="amount"  size="10"/><br>
    Yearly Interest Rate:<input type="text" name="rate" size="10"/><br>
    Number of Years:<input type="text" name="years"  size="10"/><br>
    <input type="submit" name="submit" value="enter"/>
</form>
<?php
$amount = $_POST['amount'];
$rate = $_POST['rate'];
$years = $_POST['years'];
echo $amount."".$rate."".$years."<br>";
for($i = 1;$i < $years;$i++){
    $future = $amount*pow(1 + $rate/100,$i);
    echo $i."".number_format($future,2)."<br>";
}

?>

</body>
</html>
