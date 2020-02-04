<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
    <title>Écrire un chapitre</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>
<?php require('templates/admin_buttons.php'); ?>
    <div id="nouveau_billet">
        <div id="nouveau_billet_boutton_retour"><a href="?action=espace_admin"><button> Retour </button></a></div>
        <p id="nouveau_billet_texte_aide">Fermez la fenetre avec le texte en jaune en cliquant sur la petite croix</p>

        <form id="nouveau_billet_form" method="POST" action="?action=create_post">
            <input type="text" name="title" id="nouveau_billet_form_title" placeholder="Le titre du chapitre">
            <textarea id="nouveau_billet_form_textarea" name="message">
                <p> Le texte du chapitre </p>
            </textarea>
            <input type="submit" value="Créer l'article"/>
        </form>
    </div>
</body>

</html>