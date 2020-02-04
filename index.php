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
    }

    else{
        $frontend->home();
    }
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}