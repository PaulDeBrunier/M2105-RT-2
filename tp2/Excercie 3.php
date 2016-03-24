<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 24/03/2016
 * Time: 15:53
*/
include './functions.php';
getHeader(true, "Exo 3");

if(isset($_POST['browser'])) {$_SESSION['browser'] = $_POST['browser'];
}

?>

<form method="post" action="ex3.php">
    <fieldset>
        <legend> Question n°1 </legend>
        </fieldset>
            <legend> Votre navigateur favori ? ?</legend>
            <input name="browser" value="Chrome" type="radio"> <label>Chrome</label>
            <input name="browser" value="Mozilla" type="radio"> <label>Mozilla</label>
            <input name="browser" value="Internet Explorer" type="radio"> <label>Internet Explorer</label>
            <input name="browser" value="Opera" type="radio"> <label>Opera</label>
            <input name="browser" value="Autre" type="Autre"> <label>Autre</label>
        