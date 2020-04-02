<?php
/**
 * 151_2019_startproject - snowsManagement.php
 * User: Jan.BLATTER
 * Date: 06.03.2020
 */


function showSnows(){  // Affiche tous les snows de la page Snow des clients

    $requeteSnows= "SELECT * FROM snows;";
    $result = executeQuery($requeteSnows);

     return $result;
}

function  displaySnows(){    // Affiche tous les snows de la page Snow des Admins

    $requeteSnows = "SELECT code, brand, model, snowLength, qtyAvailable, description, dailyPrice, photo, active FROM snows;";
    $result = executeQuery($requeteSnows);
    return $result;
}


function deleteSnow(){          // Supprime le snow selectioné
    $DeleteSnows = "DELETE  FROM snows WHERE code ='".$_GET['code']."';";
    $resultDeleteSnows = executeQuery($DeleteSnows);
    return $resultDeleteSnows;
}