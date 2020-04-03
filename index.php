<?php
/**
 * 151_2019_startproject - index.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */

require "controler/controler.php";

if (isset($_GET['action'])){            /* Si action est activé , alors va sur une des cases en fonction de l'utilisateur  */
    $action=$_GET['action'];
    switch ($action){
        case 'home':
         home();
         break;/* Switch qui permet d'aller vers une page en fonction de l'action */
        case 'login':
            login();
            break;
        case'logout':
            logout();
            break;
        case 'register':
            register();
            break;
        case 'registerIsCorrect':
            registerIsCorrect($_POST);
            break;
        case 'loginIsCorrect':
            loginIsCorrect($_POST);
            break;
        case 'snows':
            snows();
            break;
        case 'panier':
            panier();
            break;
        case'snowsProfil':
            snowsProfil('code');
            break;
        case 'UpdatePage':
            updSnow($_POST);
            break;
        case'deleteSnow':
            delSnow();
            break;
        default:
            home();
    }
}
else{
    home();
}