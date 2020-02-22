<?php
require_once ('configPhp/connect.php');
?>
<!DOCTYPE php>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="icon" href="CSS/IMG/logo-mini.png"/>
	<script src="jquery/jquery.js"></script>
    <title>Projet Personnel</title>
</head>
<body>
    <header>
    <a href="#main-menu" class="menu-toggle">
        <div class="burger-breads">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
      <nav id="main-menu" class="main-menu">
      <a href="#main-menu-toggle" class="menu-close">
      <div class="burger-breads close">
      <span></span>
      <span></span>
      <span></span>
      </div>  
      </a>
            <ul>
              <li class="logo"><img class="logo" src="CSS/IMG/logo-blanc.png" alt="logo"></li>
              <li><a class="active" href="index.php">Accueil</a></li>
              <li><a href="nos-figurines.php">Nos figurines</a></li>
              <li><a href="exclusives.php">Les exclusivités</a></li>
              <li class="line-nav"><a href="contact.php">Contact</a></li>
            </ul>
    
      </nav>
      
    <a href="#main-menu-toggle" class="backdrop" hidden></a>
    </header>
<img class="hero-image" src="css/img/hero-modif.png" alt="image de la figurine">
<div class="hero">

	<div class="contain">
		<h1 class="title">Trouvez vos figurines exclusives</h1>
		<p class="paragraphe">Tart lollipop apple pie pastry cake marzipan chocolate cake caramels halvah. Gummi bears jelly-o pastry soufflé donut cookie apple pie cake brownie. Biscuit gummi bears cotton candy powder lollipop apple pie cookie cake. Cotton candy chocolate dessert jujubes tiramisu toffee sweet soufflé.</p>
		<button class="button-hero"><a href="contact.php">Nous contacter</a></button>
	</div>
</div>

<section class="contain-figurines">
    <div class="container red">
        <a href="exclusives.php"><img src="css/IMG/iron-man.png" alt="image groot"></a>
        
        <h3>Figurines Pop Exclusives</h3>
    </div>
    <div class="container blue">
        <a href="nos-figurines.php"><img src="css/IMG/groot.png" alt="image groot"></a>
        <h3>Les Funko Pop</h3>
    </div>
</section>

<section class="contain-ajouts">
    <h2>Derniers ajouts</h2>
    <div class="cointain-cards">        
        <?php include 'configPhp/function-figurine.php'; ?>        
    </div>
</section>

<section class="contain-garantis">
    <h2>Nos garantis</h2>
    <div class="contain-cards-garantis">
        <div class="cards-garantis">
            <img src="css/IMG/info.png" alt="icon information">
            <p>Vous serez informé de toutes les nouveautés qui vont sortir.</p>
        </div>
        <div class="cards-garantis">
            <img src="css/IMG/gift.png" alt="icon information">
            <p>Tous nos partenaires vous enverrons des colis blindé.</p>
        </div>
        <div class="cards-garantis">
            <img src="css/IMG/valide.png" alt="icon information">
            <p>Tous nos partenaires ont étaient tester pour vous garantir une qualitée irréprochable.</p>
        </div>
    </div>
</section>
    
</body>
<?php @include("footer.php") ?>
</html>