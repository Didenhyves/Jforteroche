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
<?php require('templates/admin_buttons.php'); ?>
<div id="adminposts">
    <div id="adminposts__text">       
        <h2>Panneau d'administration :</h2>
        <h3>Quel commentaire voulez-vous modérer ? </h3>
    </div>
    <div id='adminposts__flex'>
        <table id='adminposts__table'> 
            <tr>
                <th>Signalements</th>
                <th>Auteur</th>
                <th>Commentaire</th>
                <th>Valider</th>
                <th>Supprimer</th>
            </tr>
            <?php  if(!empty($comments_selected)): ?> 
                <?php foreach ($comments_selected as $comments): ?>
                    <tr class='adminposts__ligne'>
                        <td class="adminposts__table_enter adminposts__colone__signalement"><?php echo substr($comments->signalement, 0, 50); ?></td>
                        <td class="adminposts__table_enter adminposts__colone__titre"><?php echo substr($comments->author, 0, 50); ?></td>
                        <td class="adminposts__table_enter adminposts__colone__content"><?php echo substr($comments->comment, 0, 100); ?></td>
                        <td class="adminposts__table_enter adminposts__colone__buttton__modifier"><a href="?action=valid_comment&id=<?php echo $comments->id ?>"><input type="button" value="Valider"></a></td>
                        <td class="adminposts__table_enter adminposts__colone__buttton__delete"><a href="?action=delete_comment&id=<?php echo $comments->id ?>"><input type="button" value="Supprimer"></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
            </table>
    </div>
</div>
</body>

</html>