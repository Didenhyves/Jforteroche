<?php

require_once('Manager.php');

class User_check extends Manager
{
    public function __construct(){
        $this->db = $this->dbConnect();
    }
    public function check_pass($username, $password)  // Test le pseudo et le mdp
    {
        $user = $this->db->query("SELECT * FROM user WHERE username = '$username'");
        $user_info = $user->fetch();
        if($user_info){
            
            if (password_verify($password, $user_info->password)){
                return $user_info;
            } else {
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
    }
}