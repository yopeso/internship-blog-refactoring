<?php

namespace jucarre\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $bdd= $this->dbConnect();
        $comments = $bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE post_id = ? and valid = 1 ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getComment($commentId)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    public function getUserComment($idUser)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT id, id_user, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE id_user = ?');
        $req->execute([$idUser]);
        $comment = $req->fetch();

        return $comment;
    }

    public function postComment($postId, $author, $comment)
    {
        $bdd= $this->dbConnect();
        $comments = $bdd->prepare('INSERT INTO comments(post_id, author, comment, comment_date, valid) VALUES(?, ?, ?, NOW(), 0)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function updateComment($commentId, $author, $comment)
    {
        $date=date("Y-m-d");
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('UPDATE comments SET author = :author, comment = :comment ,comment_date = :comment_date ,valid = 0 WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id'=>$commentId, 
            ':author'=>$author, 
            ':comment'=>$comment,
            ':comment_date'=>$date
        ));

        return $affectedLines;
    }

    public function getCommentsInvalid()
    {
        $valide = NULL;

        $bdd= $this->dbConnect();
        $req = $bdd->query('SELECT id, author, comment FROM comments WHERE valid = 0 ORDER BY comment_date DESC ');
        return $req;
    }

    public function setCommentsValid($commentId)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('UPDATE comments SET valid = :valid WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id'=>$commentId,
            ':valid'=>1
        ));

        return $affectedLines;
    }

}