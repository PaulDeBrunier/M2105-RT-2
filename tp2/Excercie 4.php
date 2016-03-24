<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 24/03/2016
 * Time: 16:37
 */
include '../functions.php';
getHeader(true, "Exercice 4");
if(isset($_POST['réseauxsociaux'])) {
    $_SESSION['réseauxsociaux'] = $_POST['réseauxsociaux'];
}
?>
    <form method="post" action exo4.php
          <fieldset>
              <legend>Question2</legend>
                    <fieldset>
                         <legend> Veuillez choisir votre navigateur préféré </legend>
                        <input name="browser" value="Facebook" type="radio"><label>Facebook</label>
                        <input name="browser" value="Twitter" type="radio"><label>Twitter</label>
                        <input name="browser" value="Badoo" type=radio"><label>Badoo</label>
                        <input name="browser" value="Google +" type="radio"><label>Google +</label>
                    </fieldset>
                <input
          </fieldset>



