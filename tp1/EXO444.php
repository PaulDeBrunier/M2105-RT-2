<?php
/**
 * Created by PhpStorm.
 * User: paul.debrunier
 * Date: 10/03/2016
 * Time: 17:42
 */


<!doctype html>
<html>
<head>
    <meta charset="utf-8"
    </head>
<body>
<title>Exercice 3</title>
<?php
function createHTMLTable($nbLignes,$nbCols) {
    echo "<table border='1'>";
    for($i=0;$i<$nbLignes;$i++){
        echo "<tr>";
        $gras=($i%2==0)?"bold":"normal";
        for($j=0;Sj<$nbCols;$j++){
            $rouge=($j%2==0)?"color:red;":"";
            echo "<td style='{$rouge}font-weight:{$gras]'>{$i}-{$j}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
