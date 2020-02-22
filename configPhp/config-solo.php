<?php
require_once ('connect.php');
$id=$_GET['id'];
$response = $bdd->query('SELECT *
 FROM produit 
 WHERE id="'.$id.'"');

 while ($donnes = $response->fetch()) {
?>
    <div class="container-images">        
        <img src="./css/img/<?php echo ($donnes['image_secondaire']);?>" alt="imager">
    </div>
    <div class="container-desc">
        <h2><?php echo ($donnes['nom']);?></h2>

        <h3>Caractéristiques :</h3>
        <p><strong>Franchise :</strong> <?php echo ($donnes['franchise']);?></p>
        <p><strong>Marque :</strong> <?php echo ($donnes['marque']);?></p>
        <p><strong>Série :</strong> <?php echo ($donnes['serie']);?></p>
        <p><strong>Personnage :</strong> <?php echo ($donnes['personnage']);?></p>

        <h3>Où ce la procurer : </h3>
        <p><strong>Site :</strong> <?php echo ($donnes['site']);?></p>
        <p><strong>Garanti :</strong> <?php echo ($donnes['garantie']);?></p>
        <p><strong>Colis :</strong> <?php echo ($donnes['colis']);?></p>
        <a class="button-desc" href="<?php echo ($donnes['lienSite']);?>">Acheter</a>
    </div>

 <?php }

$response->closeCursor(); ?>
