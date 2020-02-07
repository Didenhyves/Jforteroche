<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>

<?php require('templates/header.php'); ?>
<div id="admin">
    <div id="admin__texte">       
        <h2>Panneau d'administration :</h2>
        <h3>Bonjour Mr Foreroche, que voulez vous faire aujourd'hui ?</h3>
    </div>
    <div id='admin__buttons'>
        <a class="admin__buttons__selector" href="?action=nouveau_billet"><button>Écrire un article</button></a>
        <a class="admin__buttons__selector" href='?action=admin_posts'><button>Administration des chapitres</button></a>
        <a class="admin__buttons__selector" href="?action=admin_comments"><button>Administration des commentaires</button></a>
        <a class="admin__buttons__selector" href="?action=deconnexion"><button>Deconnexion</button></a>
    </div>
</div>
</body>

</html>