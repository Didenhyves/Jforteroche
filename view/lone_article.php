<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> <?php echo $post_article->title; ?></title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    
</head>

<body>
<div id="lone_article">
    <?php require('templates/header.php'); ?>

<div id="lone_article__article">
    <h1 id="lone_article__article__title"><?php echo $post_article->title; ?></h1>
    <p id="lone_article__article__text"><?php echo $post_article->content; ?></p>
</div>


<div id="lone_article__comments_full">
<div class="lone_article__comments">
<h3 id="lone_article__comments__title">Commentaires</h3>


<?php foreach ($comments_display as $comments): ?>
    <?php if($comments->signalement >= '5'): ?>
    <div class="lone_article__comments__each__signaled">
        <h3 class="lone_article__comments__each__author__signaled"><?php echo $comments->author; ?></h3>
        <p class="lone_article__comments__each__comment__signaled"><?php echo $comments->comment; ?></p>
        <h4 class="lone_article__comments__each__date__signaled">Commentaire écris le :  <?php echo date('d/m/Y à H:i:s', strtotime($comments->comment_date)); ?></h4>
        <h5>Nombre de signalement : <span class="lone_article__comments__each__signalement"><?php echo $comments->signalement; ?></span></h5>
        <form action="?action=signalement" method="post">
            <input type="hidden" value="<?php echo $comments->signalement;?>" name="signalement"/>    
            <input type="hidden" value="<?php echo $comments->id;?>" name="id">
            <input type="hidden" value="<?php echo $post_article->id;?>" name="post_id">
            <input type="submit" value="Signaler">
        </form> 
    </div>
    <?php else: ?>
        <div class="lone_article__comments__each">
        <h3 class="lone_article__comments__each__author"><?php echo $comments->author; ?></h3>
        <p class="lone_article__comments__each__comment"><?php echo $comments->comment; ?></p>
        <h4 class="lone_article__comments__each__date">Commentaire écris le :  <?php echo date('d/m/Y à H:i:s', strtotime($comments->comment_date)); ?></h4>
        <h5>Nombre de signalement : <span class="lone_article__comments__each__signalement"><?php echo $comments->signalement; ?></span></h5>
        <form action="?action=signalement" method="post">
            <input type="hidden" value="<?php echo $comments->signalement;?>" name="signalement"/>    
            <input type="hidden" value="<?php echo $comments->id;?>" name="id">
            <input type="hidden" value="<?php echo $post_article->id;?>" name="post_id">
            <input type="submit" value="Signaler">
        </form>
        </div>
<?php endif; ?>
<?php endforeach; ?>

</div>
<div id='lone_article__addcomments'>
<h3 id="lone_article__addcomments__title">Ecrire un commentaires</h3>

<form action="?action=add_comment" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea class="comment" name="comment"></textarea>
        <input name="post_id" type="hidden" value="<?php echo $post_article->id; ?>"/>
    </div>
    <div>
        <input value="Envoyer" type="submit" />
    </div>
</form>
</div>
</div>
</div>
</body>
</html>
