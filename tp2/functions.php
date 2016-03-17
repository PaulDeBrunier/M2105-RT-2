<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 17/03/2016
 * Time: 16:18
 */

function getHeader($startSession,$title){
    if ($startSession)
        session_start();
    echo "
    <!doctype html>
    <html>
    <head>
      <meta charset=''utf-8'>
      <title>{$title}</title>
    </head>
}   <body>";
function get Footer(){
    echo"</body></html>";
}

