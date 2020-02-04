<?php 

// Chargement des classes/model
require_once('model/User_check.php');
require_once('model/Posts.php');

class Backend {

    

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

    
}