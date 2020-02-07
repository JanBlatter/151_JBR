<?php
/**
 * 133-Start - index.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */

require "controler/controler.php";

if (isset($_GET['action'])){            /* Si action est activé , alors va sur une des cases en fonction de l'utilisateur  */
    $action=$_GET['action'];
    switch ($action){                       /* Switch qui permet d'aller vers une page en fonction de l'action */
        case 'login':
            login(@$_POST);
            break;
        default:
    }
}
