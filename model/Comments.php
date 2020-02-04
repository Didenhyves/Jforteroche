<?php

require_once('Manager.php');

class Comments extends Manager{ 

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function get_comments($id)
    {
        $comments_full = $this->db->query("SELECT * FROM comments WHERE post_id = $id");
        $comments_display = $comments_full->fetchAll();
        return $comments_display;
    }

    public function get_all_comments()
    {
        $get_comments_full = $this->db->query("SELECT * FROM comments WHERE signalement >= '5'");
        $comments_display = $get_comments_full->fetchAll();
        return $comments_display;
    }

    public function add_comment($post_id, $author, $comment)
    {
        $req = $this->db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $req->execute(array($post_id, $author, $comment));
    }

    public function signalement($signalement, $id)
    {
        $req = $this->db->prepare("UPDATE comments SET signalement = ? WHERE id = ?");
        $req->execute(array($signalement, $id));
    }

    public function delete_comment($id){
        $post_del =$this->db->prepare("DELETE FROM comments WHERE id = ?");
        $post_del->execute(array($id));
    }

    public function valid_comment($id){
        $post_del =$this->db->prepare("UPDATE comments SET signalement = 0 WHERE id = ?");
        $post_del->execute(array($id));
    }
}