<?php 

// Chargement des classes/model
require_once('model/User_check.php');

class Connexion {

    public function connect()
        {
            
            if ($_POST)
            {
                $User_check = new User_check();
                $user = $User_check->check_pass($_POST['pseudo'], $_POST['password']);
                if($user){
                    
                    // Instancie la session
                    
                    $_SESSION['useradmin'] = $user->id;
                    header ('location: ?action=espace_admin'); 
                }
                else{
                    $_SESSION['msg'] = array(
                        'type'  => 'danger',
                        'message'   => "Vous n'�tes pas connect� en tant qu'Admin"
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
}