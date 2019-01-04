<?php

namespace App\Model;

/**
 * PostManager regroupe tout les requêtes lié aux articles du Blog.
 */
class PostManager extends Database
{
    /**
     * @return mixed $articleTotalesReq
     */
    public function getPostsTotal()
    {
        // $bdd = $this->dbConnect();
        // $articleTotalesReq = $bdd->query('SELECT id FROM posts');

        // return $articleTotalesReq;

        $sql = 'SELECT id FROM posts';
        $result = $this->sql($sql);

        return $result;
    }

    public function getPosts($depart, $articlesParPage)
    {
        // $bdd = $this->dbConnect();
        // $req = $bdd->prepare('SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :depart , :articlesparpage');

        // $req->bindParam(':depart', $depart, \PDO::PARAM_INT);
        // $req->bindParam(':articlesparpage', $articlesParPage, \PDO::PARAM_INT);
        // $req->execute();
        // $listposts = $req;

        // return $listposts;

        $sql = 'SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :depart , :articlesparpage';
        $parameters = [[':depart', $depart, \PDO::PARAM_INT], [':articlesparpage', $articlesParPage, \PDO::PARAM_INT]];
        $result = $this->sql($sql, $parameters);

        return $result;
    }

    /**
     * Retourne un article.
     *
     * @param int $postId
     *
     * @return mixed $post
     */
    public function getPost($postId)
    {
        // $bdd = $this->dbConnect();
        // $req = $bdd->prepare('SELECT id, title, chapo, content, id_user, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts WHERE id = :postId');
        // $req->execute(array(
        //     ':postId' => $postId,
        // ));
        // $post = $req->fetch();

        // return $post;

        $sql = 'SELECT id, title, chapo, content, id_user, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts WHERE id = :postId';
        $parameters = ["':postId', $postId, \PDO::PARAM_INT"];
        $result = $this->sql($sql);

        return $result;
    }

    /**
     * Aperçu de tout les articles de l'interface admin.
     *
     * @return mixed $req
     */
    public function getPostPreview()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query('SELECT id, title, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    /**
     * Modifie un article.
     *
     * @param int    $id
     * @param string $title
     * @param string $chapo
     * @param string $content
     * @param int    $idUser
     *
     * @return mixed mixed
     */
    public function setPost($id, $title, $chapo, $content, $idUser)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE posts SET title = :title, chapo = :chapo, content = :content, id_user = :iduser ,creation_date = NOW() WHERE id = :id');
        $affectedLines = $req->execute(array(
            ':id' => $id,
            ':title' => $title,
            ':chapo' => $chapo,
            ':content' => $content,
            ':iduser' => $idUser,
        ));

        return $affectedLines;
    }

    /**
     * Ajoute un nouvel article.
     *
     * @param string $title
     * @param string $chapo
     * @param string $content
     * @param int    $idUser
     *
     * @return mixed
     */
    public function addPost($title, $chapo, $content, $idUser)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO posts (title, chapo, content, id_user, creation_date) VALUES (:title, :chapo, :content, :iduser, NOW())');
        $affectedLines = $req->execute(array(
            ':title' => $title,
            ':chapo' => $chapo,
            ':content' => $content,
            ':iduser' => $idUser,
        ));

        return $affectedLines;
    }

    /**
     * Supprime un article.
     *
     * @param int $postId
     *
     * @return mixed
     */
    public function removePost($postId)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM posts WHERE id = :postId');
        $req->execute(array(
            ':postId' => $postId,
        ));
        $affectedLines = $req;

        return $affectedLines;
    }
}
