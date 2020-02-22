<?php
require_once ('connect.php');
$response = $bdd->query('SELECT *
 FROM produit WHERE exclu=1 
 ORDER BY date DESC');
 while ($donnes = $response->fetch()) {
?>
<div class="card">
 <img src="./css/img/<?php echo ($donnes['image']);?>" alt="image de la figurine">
 <p class="description"><?php echo ($donnes['nom']);?></p>
 <p class="tarif"><?php echo ($donnes['prix']);?></p>
 <button class="button-card"><a href="figurine.php?id=<?php echo ($donnes['id']);?>">En savoir plus</a></button>
 </div>
 <?php }

$response->closeCursor(); ?>
