<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tous les chapitres</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>
    <div>
    <?php require('templates/header.php'); ?>
        <div class="content" id="accueil">
            <div id="hero">
                <h1 id="hero__titre" class="titre">Billet simple pour l'Alaska</h1>
                <h2 id="hero__sous_titre" class="titre"> L'intégrale des chapitres</h2>
            </div>
        </div>
    </div>
    <div class="content fond_bleu" id="accueil_billet">
        <h2 class="titre_section titre"> Le livre, chapitres par chapitres </h2>
        <?php require('templates/articles.php') ?>
</body>

</html>