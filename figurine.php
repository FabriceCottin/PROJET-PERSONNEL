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
              <li class="logo"><img class="logo" src="CSS/IMG/logo.png" alt="logo"></li>
              <li><a class="unefig" href="index.php">Accueil</a></li>
              <li><a class="active" href="nos-figurines.php">Nos figurines</a></li>
              <li><a class="unefig" href="exclusives.php">Les exclusivités</a></li>
              <li class="line-nav"><a class="unefig" href="contact.php">Contact</a></li>
            </ul>    
      </nav>      
    <a href="#main-menu-toggle" class="backdrop" hidden></a>
    </header>
<section class="container-une-figurine">
    <?php include ('configPhp/config-solo.php');?>
</section>

<section class="contain-ajouts">
    <h2>Produits similaires</h2>
    <div class="cointain-cards">
    <?php @include("configPhp/similar.php") ?>
    </div>
</section>
    
</body>

<?php @include("footer.php") ?>
</php>