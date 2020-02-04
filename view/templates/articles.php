<div id="accueil_billet_post">
            <?php  if(!empty($posts_articles)): ?> 
                <?php foreach ($posts_articles as $article): ?>
                    <div class="accueil_billet_post_precision">
                        <a href="?action=lone_article&id=<?php echo $article->id ?>"><h3 class='accueil_billet_post_precision_titre'><?php echo $article->title; ?></h3></a>
                        <p class="accueil_billet_post_precision_texte"> 
                            <?php echo substr($article->content, 0, 300); ?> <a class="accueil_billet_post_precision_texte__link" href="?action=lone_article&id=<?php echo $article->id ?>"> ... Lire la suite </a>
                        </p>
                        <h4 class="accueil_billet_post_precision_date">Chapitre rédigé le :  <?php echo date('d/m/Y à H:i:s', strtotime($article->creation_date)); ?> </h4>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>