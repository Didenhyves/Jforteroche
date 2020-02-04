<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <!--Ici mettre le logo-->
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <!--Ici mettre le CSS-->
</head>

<body>

<div id='formulaire'>
    <h2>Connexion</h2>
        <form action="?action=connexion" method="POST" id="connexion">
            <label for="pseudo">Pseudo : </label><input id="pseudo" name="pseudo" type="text" placeholder="Pseudo"/>
            <label for="password">Mot de passe : </label><input id="password" name="password" type="password" placeholder="Votre mot de passe"/> 
            <input type="submit" value="Valider"/>
        </form>
</div>

</body>

</html>