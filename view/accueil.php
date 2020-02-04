<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Billet&nbsp;simple&nbsp;pour&nbsp;l'Alaska</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>

<body>
    <div>
        <?php require('templates/header.php'); ?>
        <div class="content" id="accueil">
            <div id="hero">
                <h1 id="hero__titre" class="titre">Billet simple pour l'Alaska</h1>
                <h2 id="hero__sous_titre" class="titre"> Un livre de Jean Forteroche</h2>
            </div>
        </div>
    </div>
    <div class="content fond_bleu" id="accueil_a_propos">
        <h2 class="titre">A propos</h2>
        <div id="propos_flex">

            <img id="photo_auteur" src="public/images/jean2.png" alt="Jean Forteroche">
            <p>Jean Forteroche, célèbre auteur de la foule sentimentale </br>
                vous invite pour une nouvelle aventure</br>
                sur son nouveau livre, devenu site web :</br>
                Un billet simple pour l'Alaska.
            </p>
        </div>
    </div>
    <div class="content fond_bleu" id="accueil_billet">
        <h2 class="titre_section titre"> Derniers Billets </h2>
        <?php require('templates/articles.php') ?>
    </div>

</body>

</html>