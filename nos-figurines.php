<!DOCTYPE php>
<php lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="icon" href="CSS/IMG/logo-mini.png"/>
	<script src="jquery/jquery.js"></script>
    <title>Projet Personnel</title>
</head>
<body>
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
              <li><a href="index.php">Accueil</a></li>
              <li><a class="active" href="nos-figurines.php">Nos figurines</a></li>
              <li><a href="exclusives.php">Les exclusivités</a></li>
              <li class="line-nav"><a href="contact.php">Contact</a></li>
            </ul>
    
      </nav>
      
    <a href="#main-menu-toggle" class="backdrop" hidden></a>
    </header>
    <img class="hero-image" src="css/img/hero-2.png" alt="image de la figurine">
<div class="hero">
	<div class="contain">
		<h1 class="title">Toutes les figurines</h1>
		<p class="paragraphe">Tart lollipop apple pie pastry cake marzipan chocolate cake caramels halvah. Gummi bears jelly-o pastry soufflé donut cookie apple pie cake brownie. Biscuit gummi bears cotton candy powder lollipop apple pie cookie cake. Cotton candy chocolate dessert jujubes tiramisu toffee sweet soufflé.</p>
		<button class="button-hero"><a href="contact.php">Nous contacter</a></button>
	</div>
</div>

<section class="contain-ajouts marg">
    <h2>Les figurines</h2>
    <div class="cointain-cards">
        <?php include 'configPhp/config-nos-figurine.php'; ?>     
    </div>
</section>
    
</body>

<?php @include("footer.php") ?>
</php>