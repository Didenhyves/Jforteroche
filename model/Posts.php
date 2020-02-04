<?php

require_once('Manager.php');

class Posts extends Manager{ 


    public function __construct(){
        $this->db = $this->dbConnect();
    }

    public function get_post($id){
        //requete SQL
        $posts_one = $this->db->query("SELECT * FROM posts WHERE id = $id");
        $post_display_one = $posts_one->fetch();
        //
        return $post_display_one;
    }

    public function get_all_posts(){
        //requete SQL
        $posts_full = $this->db->query('SELECT * FROM posts');
        $post_display = $posts_full->fetchAll();
        //
        return $post_display;
    }

    public function get_post_by_id($id){
        //requete SQL
        $post_display = $this->db->query("SELECT * FROM posts WHERE id = $id");
        $post_sorted = $post_display->fetch();
        //
        return $post_sorted;
    }

    public function create_posts($title, $message){
        $posts_prep = $this->db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, NOW())');
        $posts_prep->execute(array($title,$message));
    }

    public function update_post($id, $title, $message){
        $posts_prep = $this->db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $posts_prep->execute(array($title,$message, $id));
    }

    public function delete_post($id){
        $post_del =$this->db->prepare("DELETE FROM posts WHERE id = ?");
        $post_del->execute(array($id));
    }
}