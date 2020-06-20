<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sách khách hàng </title>
    <style>
        table{
            border-collapse: collapse;
            witdh :100%;
        }
        th, td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

<?php
$customerList = array(
    "1" => array("ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" =>"Hà Nội",
        "anh" => "img/"),

    "2" => array("ten" => "Mai Văn B",
        "ngaysinh" => "1983-10-02",
        "diachi" =>"Nam Định",
        "anh" => "img/"),
    "3" => array("ten" => "Mai Văn C",
        "ngaysinh" => "1914-1-21",
        "diachi" =>"Bắc Giang",
        "anh" => "img/"),
    "4" => array("ten" => "Mai Văn D ",
        "ngaysinh" => "1912-2-2",
        "diachi" =>"Bắc Ninh",
        "anh" => "img/"),
    "5" => array("ten" => "Mai Văn E",
        "ngaysinh" => "1982-3-4",
        "diachi" =>"Hà Nội",
        "anh" => "img/"),

);

foreach($customerList as $key => $values){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$values['ten']."</td>";
    echo "<td>".$values['ngaysinh']."</td>";
    echo "<td>".$values['diachi']."</td>";
//    echo "<td><image src'".$values['anh']."'width = '60px' height = '60px'/></td>"
    echo "</tr>";
}

?>
</table>
</body>
</html>