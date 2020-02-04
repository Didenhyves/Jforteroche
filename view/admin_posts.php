<?php require('templates/header.php'); ?>
<?php require('templates/admin_buttons.php'); ?>
<div id="adminposts">
    <div id="adminposts__text">       
        <h2>Panneau d'administration :</h2>
        <h3>Quel article voulez-vous modifier ? </h3>
    </div>
    <div id='adminposts__flex'>
        <table id='adminposts__table'> 
            <tr>
                <th>Titre de l'article</th>
                <th>Début du texte</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php  if(!empty($posts_articles)): ?> 
                <?php foreach ($posts_articles as $article): ?>
                    <tr class='adminposts__ligne'>
                        <td class="adminposts__table_enter adminposts__colone__titre"><?php echo substr($article->title, 0, 50); ?>...</td>
                        <td class="adminposts__table_enter adminposts__colone__content"><?php echo substr($article->content, 0, 100); ?>...</td>
                        <td class="adminposts__table_enter adminposts__colone__buttton__modifier"><a href="?action=update_view&id_post=<?php echo $article->id ?>"><input type="button" value="Modifier"></a></td>
                        <td class="adminposts__table_enter adminposts__colone__buttton__delete"><a href="?action=delete_post&id=<?php echo $article->id ?>"><input type="button" value="Supprimer"></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
            </table>
    </div>
</div>
</body>

</html>