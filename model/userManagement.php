<?php
/**
 * 151_2019_startproject - userManagement.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */

require_once "dbConnector.php";


function checkLogin($username, $password)
{
    $requete = "SELECT userEmailAddress, userPsw FROM users;";      // La commande MySQL
    $result = executeQuery($requete);

    /* Checks the email & password */
    foreach ($result as $user){
        if ($username == $user['userEmailAddress'] && $password == $user['userPsw'] ){
            return true;
        }
    }
    return false;

}


function CheckRegister($formR){
    if ($form2['passwordRegister'] == $form2['passwordVerify']){
        return true;
    }

}