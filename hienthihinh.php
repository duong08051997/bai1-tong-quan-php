<?php
for($i=1; $i<=3; $i++){
    for($j=1; $j<7; $j++){
        print "*"."&nbsp&nbsp";
    }
    print "<br>";
}
for($i=1; $i<=5; $i++){
    for($j=1; $j<$i; $j++){
        print "*"."&nbsp&nbsp";
    }
    print "<br>";
}
for($i=7; $i>=1; $i--){
    for($j=1; $j<$i; $j++){
        print "*"."&nbsp&nbsp";
    }
    print "<br>";
}
?>