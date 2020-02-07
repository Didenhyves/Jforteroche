<?php

// Chargement des classes/model
require_once('model/Posts.php');
require_once('model/Comments.php');
class Frontend {

    public function home()
    {
        $Posts = new Posts();
        $posts_articles = $Posts->get_all_posts();
        return require('view/accueil.php');
    }

    public function chapitres()
    {
        $Posts = new Posts();
        $posts_articles = $Posts->get_all_posts();
        require('view/chapitres.php');
    }
    public function auteur()
    {
        require('view/auteur.php');
    }

    public function add_comment()
    {
        $Comments = new Comments();
        $Comments->add_comment($_POST['post_id'], $_POST['author'], $_POST['comment']);
        header('Location: ?action=lone_article&id=' . $_POST['post_id']);
    }
    
    public function lone_article()
    {
        if(isset($_GET['id']))
        {
        $Posts = new Posts();
        $Comments = new Comments();
        $post_article = $Posts->get_post($_GET['id']);
        $comments_display = $Comments->get_comments($_GET['id']);
        
            if(!empty($post_article))
            {
            require('view/lone_article.php');
            }
            else
            {
                echo 'Lien invalide';
            }
        }
            else
        {
            echo 'Lien invalide';
        }
    }

    public function signalement()
    {
        $Posts = new Posts();
        $Comments = new Comments();
        $signalement_incr = $_POST['signalement'];
        $signalement_incr++;
        $comments_display = $Comments->signalement($signalement_incr, $_POST['id']); 
        header('Location: ?action=lone_article&id=' . $_POST['post_id']);
    }
}