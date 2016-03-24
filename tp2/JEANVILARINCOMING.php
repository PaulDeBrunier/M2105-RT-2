<?php
/**
* Created by PhpStorm.
* User: Polo
* Date: 24/03/2016
* Time: 15:34
*/
include './../functions.php';
if(array_key_exists("nom",$_COOKIE))
    header("location:recoAuto.php");
getHeader(true,"Exercice 2");
?>
    <div class="container">
        <form class="form-inline" method="post" action="ex2.php">
            <fieldset>
                <legend>Veuillez vous connecter</legend>
                <div class="alert alert-info">Saisir votre nom et valider.</div>
                <div class="form-group">
                    <input placeholder="Nom..." class="form-control" type="text" name="nom">
                    <input class="btn btn-primary" type="submit" value="Valider">
                </div>
                <div class="form-group">
                    <label class="control-label"><input type="checkbox" name="ckRemember"> Se souvenir de moi</label>
                </div>
            </fieldset>

        </form>
    </div>

<?php
getFooter();