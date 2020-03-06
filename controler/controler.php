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

require_once "model/userManagement.php";                // Mettre ça sinon ça marche pas IMPORTANT
require_once "model/snowsManagement.php";               // Mettre ça sinon ça marche pas IMPORTANT

function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

function login()
{
    $_GET['action'] = "login";
    require "view/login.php";
}

function logout()
{
    session_destroy();
    require "view/home.php";
}

function register()
{
    $_GET['action'] = "register";

    require "view/register.php";
}

function registerIsCorrect($formR){
    if (CheckRegister($formR)) {
        home();
    } else {
        register();
    }
}

function loginIsCorrect($formL){
    if (CheckLogin($formL)) {
        home();
    } else {
        login();
    }
}

function snows(){
    $_GET['action'] = "snows";
    $snowsResults=showSnows();
    require "view/snows.php";

}

function displaySnows(){

}