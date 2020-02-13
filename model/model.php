<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 151_2019_ForStudents
 * Created  : 05.02.2019 - 18:40
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

require_once "dbConnector.php";

function checkLogin($motdepasse,$utilisateur)
{
    if ($motdepasse == 1234 && $utilisateur == "Jan@cpnv.ch") {         /* si le mot de passe et l'utilisateur sont correctes. retourne Vrai */
        return true;
    } else
        return false;


}