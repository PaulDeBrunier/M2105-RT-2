<?php
/**
 * Created by PhpStorm.
 * User: paul.debrunier
 * Date: 10/03/2016
 * Time: 17:20
 */

<!doctype html>
<html>
<head>
<meta charset="utf-8"
    </head>
<body>
<title>Exercice 1</title>
<?php
$a=5;
$b=6;

function addition($a,$b){
    return $a+$b;
}
echo addition($a,$b)."<br>";

function soustraction($a,$b){
    return $a-$b;
}
echo soustraction($a,$b)."<br>";

function multiplication($a,$b){
    return $a*$b;
}
echo multiplication($a,$b)."<br>";

function division($a,$b){
    return $a/$b;
}
echo division($a,$b)."<br>";

?>
</body>
</html>
