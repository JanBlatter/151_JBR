<?php
/**
 * 151_2019_startproject - userManagement.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */

require_once "dbConnector.php";


function checkLogin($username, $password)
{
    $requete = "SELECT userEmailAddress, userPsw FROM users;";
    $result = executeQuery($requete);

    require_once 'model/dbConnector.php';
    $queryResult = executeQuery($requete);

}