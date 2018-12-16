<?php
namespace App\Model;

/**
 * CommentManager regroupe toutes les requêtes lie au commetaires.
 */
class CommentManager extends Manager
{
    /**
     * retourne tout les commentaires d'un article
     *
     * @param int $postId id de l'article.
     * @return $comments
     */
    public function getComments($postId)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare('SELECT id, id_user, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE post_id = ? and valid = 1 ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    /**
     * retourne le commentaire demander
     *
     * @param int $commentId id du commentaire
     * @return $comment
     */
    public function getComment($commentId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, id_user, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    /**
     * retourne tout les commentaire d'un utilisateur
     *
     * @param int $userId id utilisateur
     * @return $comments
     */
    public function getUserComment($userId)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare('SELECT id, post_id, author, comment, valid,DATE_FORMAT(comment_date, \'%d/%m/%Y \') AS comment_date_fr FROM comments WHERE id_user = ? ORDER BY comment_date DESC');
        $comments->execute(array($userId));

        return $comments;
    }

    /**
     * ajoute le commentaire d'un utilisateur
     *
     * @param int $id
     * @param int $userId
     * @param string $author
     * @param string $comment
     * @return bool
     */
    public function postComment($id, $userId, $author, $comment)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare('INSERT INTO comments(post_id, id_user, author, comment, comment_date, valid) VALUES(?, ?, ?, ?, NOW(), 0)');
        $affectedLines = $comments->execute(array($id, $userId, $author, $comment));

        return $affectedLines;
    }

    /**
     * modifie un commentaire existant et le passe non-valide
     *
     * @param int $commentId
     * @param string $author
     * @param string $comment
     * @return bool
     */
    public function updateComment($commentId, $author, $comment)
    {
        $date = date("Y-m-d");
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE comments SET author = :author, comment = :comment ,comment_date = :comment_date ,valid = 0 WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id' => $commentId,
            ':author' => $author,
            ':comment' => $comment,
            ':comment_date' => $date,
        ));

        return $affectedLines;
    }

    /**
     * Retourne tout les commentaires non-valide
     *
     * @return $req
     */
    public function getCommentsInvalid()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query('SELECT id, author, comment FROM comments WHERE valid = 0 ORDER BY comment_date DESC ');
        return $req;
    }

    /**
     * passe le commentaire non-valdie en valide
     *
     * @param int $commentId
     * @return bool
     */
    public function setCommentValid($commentId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE comments SET valid = :valid WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id' => $commentId,
            ':valid' => 1,
        ));

        return $affectedLines;
    }

    /**
     * supprime un commentaire
     *
     * @param int $id
     * @return bool
     */
    public function removeComment($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM comments WHERE id = :id');
        $req->execute(array(
            ':id' => $id,
        ));
        $affectedLines = $req;

        return $affectedLines;
    }


}
