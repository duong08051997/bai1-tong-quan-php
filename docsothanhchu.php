<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đọc chữ thành số</title>
</head>
<body>
<form  action="" method="post">
    <input type="text" name="number"/><br/>
    <input type="submit" value="enter">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $number = $_POST['number'];
    echo readNumber($number);
}
function motChuSo($number){
    $motChuSo = ["zero","one","two","three","four","five","six","seven","eight","nine"];
    return $motChuSo[$number];
}
function haiChuSo($number){
    $hangMuoi =[
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eightteen",
        19 => "nineteen",
    ];
    $hangChuc = [
        2 => "twenty",
        3 => "thirty",
        4 => "forty",
        5 => "fifty",
        6 => "sixty",
        7 => "seventy",
        8 => "eighty",
        9 => "nicety",
    ];
    if ($number < 20){
        return $hangMuoi[$number];
    }

    if ($number[1] == 0){
        return $hangChuc[$number[0]];
    }
    return $hangChuc[$number[0]]. " ".motChuSo($number[1]);
}
function baChuSo($number){
    if($number % 100 == 0){
        return motChuSo($number[0])." "."hundred";
    }
    if($number[1] == 0){
        return motChuSo($number[0])." "."hundred and".motChuSo($number[2]);
    }
    return motChuSo($number[0])." "."hundred and"." ".haiChuSo(substr($number,1,2));
}

function readNumber($number){
    switch (strlen($number)){
        case 1:
            $words = motChuSo($number);
            break;
        case 2:
            $words = haiChuSo($number);
            break;
        case 3:
            $words = baChuSo($number);
            break;
        default:
            $words = "số to quá đéo đọc được!";
            break;
    }
    return $words;
}
?>

</body>
</html>

