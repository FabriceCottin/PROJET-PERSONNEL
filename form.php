<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire d'ajout</title>
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
              <li class="logo"><img class="logo" src="CSS/IMG/logo.png" alt="logo"></li>
              <li><a class="active" href="index.php">Accueil</a></li>
              <li><a href="nos-figurines.php">Nos figurines</a></li>
              <li><a href="exclusives.php">Les exclusivités</a></li>
              <li class="line-nav"><a href="contact.php">Contact</a></li>
            </ul>
    
      </nav>
      
    <a href="#main-menu-toggle" class="backdrop" hidden></a>
    </header>

    <h2 class="title-form">Ajouter des nouvelles figurines</h2>


    <form name="insertion" action="configPhp/verif-form.php" method="POST">
        <table>
          <tr >
            <td><h3>Titre :</h3></td>
            <br>
            <td><input type="text" name="nom"></td>
          </tr>
          <tr >
            <td><h3>Franchise :</h3></td><br>
            <td><input type="text" name="franchise"></td>
          </tr>
          <tr >
            <td><h3>Marque :</h3></td><br>
            <td><input type="text" name="marque"></td>
          </tr>
          <tr >
            <td><h3>Série :</h3></td><br>
            <td><input type="text" name="serie"></td>
          </tr>
          <tr >
              <td><h3>Personnage :</h3></td> <br>
              <td><input type="text" name="personnage"></td>
          </tr>
          <tr >
            <td><h3>Site :</h3></td> <br>
            <td><input type="text" name="site"></td>
        </tr>
        <tr>
            <td><h3>Garantie :</h3></td> <br>
            <td><input type="text" name="garantie"></td>
        </tr>
        <tr >
            <td><h3>Prix :</h3></td> <br>
            <td><input type="text" name="prix"></td>
        </tr>
        <tr >
            <td><h3>Colis :</h3></td> <br>
            <td><input type="text" name="colis"></td>
        </tr>
        <tr >
        <td><h3>Exclusivité :</h3></td><br>
            <td>
            <select name="exclu" size="1">
                <option> 0
                <option> 1
            </select>
            </td>
        </tr>
        <tr >
            <td><h3>date :</h3></td> <br>
            <td><input type="text" name="date"></td>
        </tr> 
        <tr >
            <td><h3>image :</h3></td> <br>
            <td><input type="text" name="image"></td>
        </tr>
        <tr >
            <td><h3>Lien site :</h3></td> <br>
            <td><input type="text" name="lienSite"></td>
        </tr>
        <tr >
            <td><h3>Image secondaire :</h3></td> <br>
            <td><input  type="text" name="image-secondaire"></td>
        </tr>
          <tr >
            <td class="envoie">
              <input type="submit" value="insérer">
            </td>
          </tr>
        </table>      
        </div>
      </form>    
</body>
<?php @include("footer.php") ?>
</html>
