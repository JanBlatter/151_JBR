<?php
/**
 * 151_2019_startproject - login.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */
// tampon de flux stocké en mémoire
ob_start(); //ouvre la mémoire tampon
$titre="Rent  A Snow - Accueil"
?>
    <form method="POST" action="index.php?action=registerIsCorrect">
        <br>
        <h1> Créer un nouveau compte </h1>
        <b>Username:</b><br>
        <input  type="email" name="usernameRegister" value="" placeholder="enter email adress" required>
        <br>
        <b>Pseudo:</b><br>
        <input  type="text" name="pseudo" value="" placeholder="enter pseudo" required>
        <br>
        <b>Password:</b><br>
        <input type="password" name="passwordRegister" value="" placeholder="enter Password" required>
        <br>
        <b>Confirm Password:</b><br>
        <input type="password" name="passwordVerify" value="" placeholder="enter the same password" required>
        <br>

        <input type="submit" value="Login"> <input type="button" value="Reset"> Forgot <a href="">password</a>



    </form>
<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.