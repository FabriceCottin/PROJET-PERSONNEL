<?php
require_once ('connect.php');
$response = $bdd->query('SELECT *
 FROM produit 
 ORDER BY date ASC
 LIMIT 9');
 while ($donnes = $response->fetch()) {
?>
<div class="card">
    <div class="box-img">
        <img src="./css/img/<?php echo ($donnes['image']);?>" alt="image de la figurine">
    </div>
    <p class="description"><?php echo ($donnes['nom']);?></p>
    <p class="tarif"><?php echo ($donnes['prix']);?></p>
    <button class="button-card"><a href="figurine.php?id=<?php echo ($donnes['id']);?>">En savoir plus</a></button>
</div>
 <?php }

$response->closeCursor(); ?>
