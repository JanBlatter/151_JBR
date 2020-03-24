<?php
/**
 * 133-Start - snowsProfil.php
 * User: Janbl
 * Date: 24.03.2020
 */

// tampon de flux stocké en mémoire
$title = "RentASnow - Snows";
ob_start();
$rows = 0; // Column count

?>
    <html lang="fr">
    <head>
        <style>
            table, td, th {
                border: 1px solid #ddd;
                text-align: left;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 15px;
            }
        </style>
        <title></title>
    </head>
    <table>
        <div>
            <article>
                <header>
                    <h2> Nos Snows</h2>
                    <div class="yox-view">
                        <tr>
                            <th><strong>Code</strong></th>
                            <th><strong>Marque</strong></th>
                            <th><strong>Model</strong></th>
                            <th><strong>Longueur</strong></th>
                            <th><strong>Prix </strong> CHF </th>
                            <th><strong>Disponibilité </strong></th>
                            <th><strong>Photo </strong></th>
                            
                        </tr>

                        <?php foreach ($snowsResults as $result) : ?>
                            <?php $rows++; ?>
                            <?php if ($rows % 4) : // tests to have 4 items / line ?>
                                <div class="row-fluid">
                                <ul class="thumbnails">
                                <?php $rows = 0; ?>
                            <?php endif ?>
                            <tr>
                                <td><?= $result['code'];?></td>
                                <td><?= $result['brand']; ?></td>
                                <td><?= $result['model']; ?></td>
                                <td><?= $result['snowLength']; ?> cm</td>
                                <td><?= $result['dailyPrice']; ?>.- / jour</td>
                                <td><?= $result['qtyAvailable']; ?></td>
                                <td><a href="view/content/images/<?= $result['code']; ?>.jpg" target="blank"><img src="<?= $result['photo']; ?>" alt="<?= $result['code']; ?>"></a></td>
                                <?php $result++ ?>
                            </tr>
                            <?php if ($rows % 4) : ?>
                                </ul>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>

                    </div>
                </header>
            </article>
            <hr/>
        </div>
    </table>
    </html>

<?php

$content = ob_get_clean();
require 'gabarit.php';
?>