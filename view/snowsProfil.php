<?php
/**
 * 133-Start - snowsProfil.php
 * User: Janbl
 * Date: 24.03.2020
 */

// tampon de flux stocké en mémoire
$title = "Snows";
ob_start();
$rows = 0; // Column count

?>
    <head>
    <link rel="stylesheet" href="view/style.css">
    </head>
    <html lang="fr">
    <table>
        <div>
            <article>
                <header>
                    <h2> Nos snows - Version Admnistrateur </h2>
                    <br>
                    <br>
                    <input type="button" value="Ajouter un snow">
                    <div class="yox-view">
                        <tr>
                            <th class="title"><strong>Code</strong></th>
                            <th class="title"><strong>Marque</strong></th>
                            <th class="title"><strong>Modèle</strong></th>
                            <th class="title"><strong>Longueur</strong></th>
                            <th class="title"><strong>Prix </strong>  </th>
                            <th class="title"><strong>Disponibilité </strong></th>
                            <th class="title"><strong>Photo </strong></th>
                            <th class="title"><strong>Supprimer</strong></th>
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
                                <td><a href="view/content/images/<?= $result['code']; ?>.jpg" target="blank"><img class="img" src="<?= $result['photo']; ?>" alt="<?= $result['code']; ?>"></a></td>
                                <td><button><a href="/index.php?action=deleteSnow&code=<?=$result['code'];?>">Supprimer</a></button></td>
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


$contenu = ob_get_clean();
require 'gabarit.php';
?>