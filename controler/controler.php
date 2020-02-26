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

require_once "model/userManagement.php";

function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

function login($POST)
{
    $_GET['action'] = "login";
    $username=@$_POST["username"];
    $password=@$_POST["password"];
    if (isset($username) && isset($password)){
        checkLogin($username, $password);
    }
    else{
        require "view/login.php";
    }


}


