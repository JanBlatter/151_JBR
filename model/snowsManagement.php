<?php
/**
 * 151_2019_startproject - snowsManagement.php
 * User: Jan.BLATTER
 * Date: 06.03.2020
 */


function showSnows(){

    $requeteSnows= "SELECT * FROM snows;";
    $result = executeQuery($requeteSnows);

     return $result;
}

function  displaySnows(){

    $requeteSnows = "SELECT code, brand, model, snowLength, qtyAvailable, description, dailyPrice, photo, active FROM snows;";
    $result = executeQuery($requeteSnows);
    return $result;
}