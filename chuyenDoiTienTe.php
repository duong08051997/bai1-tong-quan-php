<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyển đổi tiền tệ</title>
</head>
<body>
<form action="" method="post">
<!--    VNĐ: <input name="vnd" size="10" type="text"/><br/>-->
    USD: <input type="text" name="usd" size="10"/><br/>
    <input type="submit" value="change"/>
</form>
<?php
//$vnd = $_POST['vnd'];
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$usd = $_POST['usd'];
$vnd = $usd*23000;
echo $vnd."VNĐ";
}
?>
</body>
</html>
