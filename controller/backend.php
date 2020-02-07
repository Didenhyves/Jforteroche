<?php 

// Chargement des classes/model
require_once('model/User_check.php');
require_once('model/Posts.php');

class Backend {

    public function __construct(){
        if (!isset($_SESSION['useradmin'])){
            header ('location: ?action=accueil');
        }
    }

    public function deconnexion()
    {
        unset($_SESSION['useradmin']);
        header ('location: ?action=accueil');
    }

    public function administration()
    {
        if (isset($_SESSION['useradmin'])){
            require('view/administration.php');
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function nouveau_billet()
    {
        if (isset($_SESSION['useradmin'])){
            require('view/nouveau_billet.php');
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function create_posts()
    {
        if(isset($_SESSION['useradmin'])){
            $Posts = new Posts();
            $Posts->create_posts($_POST['title'], $_POST['message']);
            header("location: ?action=chapitres");
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function update_billet_view()
    {
        if(isset($_SESSION['useradmin'])){
        if(isset($_GET['id_post'])){
            $Posts = new Posts();
            $post_info = $Posts->get_post_by_id($_GET['id_post']);
            if(!empty($post_info))
            {
                require('view/update_billet.php');
            }
            else
            {
                echo "Le chapitre demandé n'existe pas";
            }
        }
        
        else{
            header("location: ?action=chapitres");
        }
    }

        else{
            header ('location: ?action=connexion');
        }
    }

    public function update_post()
    {
        if(isset($_SESSION['useradmin'])){
            $Posts = new Posts();
            $Posts->update_post($_POST['id_post'], $_POST['title'], $_POST['message']);
            header("location: ?action=chapitres");
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function delete_post()
    {
        if(isset($_SESSION['useradmin'])){
            if(isset($_GET['id'])){
                $Posts = new Posts();
                $Posts->delete_post($_GET['id']);
                header("location: ?action=admin_posts");
            }
        }     
        else{
            header ('location: ?action=connexion');
        }
    }

    public function admin_posts()
    {
        if(isset($_SESSION['useradmin'])){
            $Posts = new Posts();
            $posts_articles = $Posts->get_all_posts();
            $title = 'administration';
            require('view/admin_posts.php');
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function admin_comments()
    {
        if(isset($_SESSION['useradmin'])){
            $Comments = new Comments();
            $comments_selected = $Comments->get_all_comments();
            require('view/admin_comments.php');
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function delete_comment()
    {
        if(isset($_GET['id'])){
            $Comments = new Comments();
            $Comments->delete_comment($_GET['id']);
            header("location: ?action=admin_comments");
        }
    }

    public function valid_comment()
    {
        if(isset($_GET['id'])){
            $Comments = new Comments();
            $Comments->valid_comment($_GET['id']);
            header("location: ?action=admin_comments");
        }
    }
}