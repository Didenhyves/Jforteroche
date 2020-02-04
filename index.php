<?php

session_start();

require('controller/frontend.php');
require('controller/backend.php');

$frontend = new Frontend();
$backend = new Backend();

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'accueil') {
            $frontend->home();
        }
        elseif ($_GET['action'] == 'connexion'){
            $backend->connexion();
        }
        elseif ($_GET['action'] == 'espace_admin'){
            $backend->administration();
        }
        elseif($_GET['action'] == 'deconnexion'){
            $backend->deconnexion();
        }
        elseif($_GET['action'] == 'chapitres'){
            $frontend->chapitres();
        }
        elseif($_GET['action'] == 'auteur'){
            $frontend->auteur();
        }
        elseif($_GET['action'] == 'nouveau_billet'){
            $frontend->nouveau_billet();
        }   
        elseif($_GET['action'] == 'create_post'){
            $backend->create_posts();
        }
        elseif($_GET['action'] == 'update_view'){
            $backend->update_billet_view();
        }
        elseif($_GET['action'] == 'update_post'){
            $backend->update_post();
        }
        elseif($_GET['action'] == 'admin_posts'){
            $backend->admin_posts();
        }
        elseif($_GET['action'] == 'delete_post'){
            $backend->delete_post();
        }
        elseif($_GET['action'] == 'lone_article'){
            $backend->lone_article();
        }
        elseif($_GET['action'] == 'add_comment'){
            $backend->add_comment();
        }
        elseif($_GET['action'] == 'signalement'){
            $backend->signalement();
        }
        elseif($_GET['action'] == 'admin_comments'){
            $backend->admin_comments();
        }
        elseif($_GET['action'] == 'delete_comment'){
            $backend->delete_comment();
        }
        elseif($_GET['action'] == 'valid_comment'){
            $backend->valid_comment();
        }
    }

    else{
        $frontend->home();
    }
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}