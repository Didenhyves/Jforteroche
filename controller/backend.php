<?php 

// Chargement des classes/model
require_once('model/User_check.php');
require_once('model/Posts.php');

class Backend {

    public function connexion()
    {
        
        if ($_POST)
        {
            $User_check = new User_check();
            $user = $User_check->check_pass($_POST['pseudo'], $_POST['password']);
            if($user){
                
                // Instancie la session
                
                $_SESSION['useradmin'] = $user->id;
                // Redirige la vue
                header ('location: ?action=espace_admin'); 
            }
            else{
                $_SESSION['msg'] = array(
                    'type'  => 'danger',
                    'message'   => "Vous n'êtes pas connecté en tant qu'Admin"
                );
                header ('location: ?action=connexion');
            }
        }
        else {
            if(isset($_SESSION['useradmin'])){
                header ('location: ?action=espace_admin');
            }
            else{
                require('view/connexion.php');
            }
        }
    }

    public function deconnexion()
    {
        unset($_SESSION['useradmin']);
        header ('location: ?action=accueil');
    }

    public function administration()
    {
        if($_SESSION['useradmin']){
            require('view/administration.php');
        }
        else{
            header ('location: ?action=connexion');
        }
    }

    public function create_posts()
    {
        $Posts = new Posts();
        $Posts->create_posts($_POST['title'], $_POST['message']);
        header("location: ?action=chapitres");
    }

    public function update_billet_view()
    {
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

    public function update_post()
    {
        $Posts = new Posts();
        $Posts->update_post($_POST['id_post'], $_POST['title'], $_POST['message']);
        header("location: ?action=chapitres");
        
    }

    public function delete_post()
    {
        if(isset($_GET['id'])){
            $Posts = new Posts();
            $Posts->delete_post($_GET['id']);
            header("location: ?action=admin_posts");
        }
    }

    public function admin_posts()
    {
        $Posts = new Posts();
        $posts_articles = $Posts->get_all_posts();
        $title = 'administration';
        require('view/admin_posts.php');
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

    public function admin_comments()
    {
        $Comments = new Comments();
        $comments_selected = $Comments->get_all_comments();
        require('view/admin_comments.php');
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