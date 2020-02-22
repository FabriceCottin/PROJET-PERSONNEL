<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au back office du site :</p>
        <form action="form.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée au personnel du site, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>