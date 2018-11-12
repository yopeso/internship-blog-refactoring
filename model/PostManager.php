<?php

namespace jucarre\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, chapo, content, id_user, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function getPostPreview()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function setPost($postId, $title, $chapo, $content, $idUser)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = :title, chapo = :chapo, content = :content, id_user = :iduser ,creation_date = NOW() WHERE id = :id');
        $req->execute(array(
            ':id'=>$postId,
            ':title'=>$title,
            ':chapo'=>$chapo,
            ':content'=>$content,
            ':iduser'=>$idUser
        ));

        return $post;
    }
    
    public function addPost($title, $chapo, $content, $idUser)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, chapo, content, id_user, creation_date) VALUES (:title, :chapo, :content, :iduser, NOW())');
        $req->execute(array(
            ':title'=>$title,
            ':chapo'=>$chapo,
            ':content'=>$content,
            ':iduser'=>$idUser
        ));

        return $affectedLines;
    }

}