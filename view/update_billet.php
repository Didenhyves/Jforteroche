<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
    <title>Billet&nbsp;simple&nbsp;pour&nbsp;l'Alaska</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <!--Ici mettre le logo-->
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <!--Ici mettre le CSS-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>
    <div id="nouveau_billet">
        <div id="nouveau_billet_boutton_retour"><a href="?action=espace_admin"><button> Retour </button></a></div>
        <p id="nouveau_billet_texte_aide">Fermez la fenetre avec le texte en jaune en cliquant sur la petite croix</p>
        <form id="nouveau_billet_form" method="POST" action="?action=update_post">
            <input type="hidden" name='id_post' value="<?php echo $_GET['id_post']; ?>" >
            <input value="<?php echo $post_info->title; ?>" type="text" name="title" id="nouveau_billet_form_title" placeholder="Le titre du chapitre">
            <textarea id="nouveau_billet_form_textarea" name="message">
                <?php echo $post_info->content; ?>
            </textarea>
            <input type="submit" value="Mettre à jour"/>
        </form>
    </div>
</body>

</html>