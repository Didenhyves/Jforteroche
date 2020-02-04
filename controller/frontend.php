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

    public function nouveau_billet()
    {
        require('view/nouveau_billet.php');
    }
}