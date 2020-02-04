<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>
<div class="content" id="header">
            <h2 class="titre"><a href="?action=accueil">Billet simple pour l'Alaska&nbsp;</a></h2>
            <div id="header_menu">
                <a href="?action=chapitres">Liste des chapitres</a>
                <a href="?action=auteur">A propos de l'auteur</a>
                <?php if(isset($_SESSION['useradmin'])): ?>
                    <a href="?action=espace_admin">Espace Administrateur</a>
                    <a href="?action=deconnexion">Déconnexion</a>
                <?php else: ?>
                    <a href="?action=connexion">Espace Administrateur</a>
                <?php endif; ?>
                
            </div>
        </div>