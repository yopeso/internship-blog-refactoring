<?php

namespace App\Model;


class PostManager extends Manager
{
    public function getPostsTotal()
    {
        $bdd= $this->dbConnect();
        $articleTotalesReq = $bdd->query('SELECT id FROM posts');

        return $articleTotalesReq;
    }

    public function getPosts($depart, $articlesParPage)
    {
        /*
        marche pas
         $req = $bdd->prepare('SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :depart , :articlesParPage');
            $req->execute(array(
                ':depart'=>$depart,
                ':articlesParPage'=>$articlesParPage
            ));
            $listposts = $req;
         */
        $bdd= $this->dbConnect();
        $listposts = $bdd->query('SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT '.$depart.', '.$articlesParPage);
       
        return $listposts;
    }

    public function getPost($postId)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT id, title, chapo, content, id_user, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts WHERE id = :postId');
        $req->execute(array(
            ':postId'=>$postId
        ));
        $post = $req->fetch();

        return $post;
    }

    public function getPostPreview()
    {
        $bdd= $this->dbConnect();
        $req = $bdd->query('SELECT id, title, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function setPost($postId, $title, $chapo, $content, $idUser)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('UPDATE posts SET title = :title, chapo = :chapo, content = :content, id_user = :iduser ,creation_date = NOW() WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id'=>$postId,
            ':title'=>$title,
            ':chapo'=>$chapo,
            ':content'=>$content,
            ':iduser'=>$idUser
        ));

        return $affectedLines;
    }
    
    public function addPost($title, $chapo, $content, $idUser)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO posts (title, chapo, content, id_user, creation_date) VALUES (:title, :chapo, :content, :iduser, NOW())');
        $affectedLines = $req->execute(array(
            ':title'=>$title,
            ':chapo'=>$chapo,
            ':content'=>$content,
            ':iduser'=>$idUser
        ));

        return $affectedLines;
    }

    public function removePost($postId)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM posts WHERE id = :postId');
        $req->execute(array(
            ':postId'=>$postId
        ));
        $affectedLines = $req;

        return $affectedLines;
    }

}