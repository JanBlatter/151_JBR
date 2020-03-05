<?php
/**
 * 151_2019_startproject - userManagement.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */

require_once "dbConnector.php";


function CheckLogin($formL)
{
    $password = $formL['password'];
    $email = $formL['username'];

    $requete= "SELECT userEmailAddress, userPsw FROM users where userEmailAddress ='$email';";      // La commande MySQL
    $result = executeQuery($requete);

    if ($result) {
        if (password_verify($password, $result[0]['userPsw'])) {
            return true;
        }else{
            return false;
        }
    } else {
        return false;
    }
}


function CheckRegister($formR)
{
    $email = $formR['usernameRegister'];
    $pseudo = $formR['pseudo'];
    $requeteR = "SELECT userEmailAddress, pseudo FROM users WHERE userEmailAddress ='" . $formR['usernameRegister'] . "';";
    $queryResult = executeQuery($requeteR);

    if ($queryResult) {
        return false;
    } else {
        if ($formR['passwordRegister'] == $formR['passwordVerify']) {
            $pwdHash = password_hash($formR['passwordRegister'], PASSWORD_DEFAULT);
            $requeteAdd = "INSERT INTO snows.users (userEmailAddress, userPsw, pseudo) VALUES ('$email', '$pwdHash','$pseudo');";
            executeQuery($requeteAdd);

            $_SESSION['e-mail'] = $formR['usernameRegister'];

            echo "Compte créé, veuillez-vous connecté";
            return true;
        } else {
            return false;
        }
    }
}