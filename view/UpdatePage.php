<?php
/**
 * 133-Start - UpdatePage.php
 * User: Janbl
 * Date: 03.04.2020
 */
$title = "UpdatePage";
ob_start();
$rows = 0; // Column count
$code=$_POST;
?>



        <form method="POST" action="index.php?action=UpdatePage">

            <label>Code</label>
            <input type="text" name="codeUpdate" value="<?= $code[0][1] ?>">

            <label>Brand</label>
            <input type="text" name="brandUpdate" value="<?= $code[0][2] ?>">

            <label>Model</label>
            <input type="text" name="modelUpdate" value="<?= $code[0][3] ?>">

            <label>SnowLength</label>
            <input type="number" name="snowLengthUpdate" value="<?= $code[0][4] ?>">

            <label>QtyAvailable (max 6) </label>
            <input type="number" name="qtyAvailableUpdate" value="<?= $code[0][5] ?>">

            <label>Description</label>
            <input type="text" name="descriptionUpdate" value="<?= $code[0][6] ?>">

            <label>DailyPrice</label>
            <input type="number" name="dailyPriceUpdate" value="<?= $code[0][7] ?>">

            <label>Photo</label>
            <input type="file" name="photoUpdate" value="<?= $code[0][8] ?>">

            <label>Active (mettez 0 ou 1)</label>
            <input type="number" name="activeUpdate" value="<?= $code[0][9] ?>">

            <input type="submit" name="buttonUpdate" value="Modifier">

        </form>









<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>