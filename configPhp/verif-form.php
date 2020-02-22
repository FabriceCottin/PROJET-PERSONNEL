<?php
require_once ('connect.php');

$require =$bdd->prepare('INSERT INTO produit (nom, franchise, marque, serie, personnage, site, garantie, prix, colis, exclu, date, image, lienSite, image_secondaire) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

$require->execute(array($_POST['nom'], $_POST['franchise'], $_POST['marque'], $_POST['serie'], $_POST['personnage'], $_POST['site'], $_POST['garantie'], $_POST['prix'], $_POST['colis'], $_POST['exclu'], $_POST['date'], $_POST['image'], $_POST['lienSite'], $_POST['image-secondaire']));
header('Location: ../form.php');
?>