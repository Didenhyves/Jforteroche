<?php

session_start();

require('controller/frontend.php');
require('controller/backend.php');
require('controller/connexion.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'accueil') {
            (new Frontend)->home();
        }
        elseif ($_GET['action'] == 'connexion'){
            (new Connexion)->connect();
        }
        elseif ($_GET['action'] == 'espace_admin'){
            (new Backend)->administration();
        }
        elseif($_GET['action'] == 'deconnexion'){
            (new Backend)->deconnexion();
        }
        elseif($_GET['action'] == 'chapitres'){
            (new Frontend)->chapitres();
        }
        elseif($_GET['action'] == 'auteur'){
            (new Frontend)->auteur();
        }
        elseif($_GET['action'] == 'nouveau_billet'){
            (new Backend)->nouveau_billet();
        }   
        elseif($_GET['action'] == 'create_post'){
            (new Backend)->create_posts();
        }
        elseif($_GET['action'] == 'update_view'){
            (new Backend)->update_billet_view();
        }
        elseif($_GET['action'] == 'update_post'){
            (new Backend)->update_post();
        }
        elseif($_GET['action'] == 'admin_posts'){
            (new Backend)->admin_posts();
        }
        elseif($_GET['action'] == 'delete_post'){
            (new Backend)->delete_post();
        }
        elseif($_GET['action'] == 'lone_article'){
            (new Frontend)->lone_article();
        }
        elseif($_GET['action'] == 'add_comment'){
            (new Frontend)->add_comment();
        }
        elseif($_GET['action'] == 'signalement'){
            (new Frontend)->signalement();
        }
        elseif($_GET['action'] == 'admin_comments'){
            (new Backend)->admin_comments();
        }
        elseif($_GET['action'] == 'delete_comment'){
            (new Backend)->delete_comment();
        }
        elseif($_GET['action'] == 'valid_comment'){
            (new Backend)->valid_comment();
        }
    }

    else{
        (new Frontend)->home();
    }
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}