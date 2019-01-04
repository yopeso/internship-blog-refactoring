<?php

namespace App\Model;

/**
 * PostManager regroupe tout les requêtes lié aux articles du Blog.
 */
class PostManager extends Manager
{
    /**
     * @return mixed $articleTotalesReq
     */
    public function getPostsTotal()
    {
        $bdd = $this->dbConnect();
        $articleTotalesReq = $bdd->query('SELECT id FROM posts');

        return $articleTotalesReq;
    }

    /**
     * Undocumented function.
     *
     * @param int $depart
     * @param int $articlesParPage
     */
    public function getPosts($depart, $articlesParPage)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :depart , :articlesparpage');

        $req->bindParam(':depart', $depart, \PDO::PARAM_INT);
        $req->bindParam(':articlesparpage', $articlesParPage, \PDO::PARAM_INT);
        $req->execute();
        $listposts = $req;

        return $listposts;
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
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, title, chapo, content, id_user, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts WHERE id = :postId');
        $req->execute(array(
         ':postId' => $postId,
        ));
        $row = $req->fetch();

        if ($row) {
            return $this->buildObject($row);
        } else {
            echo 'Aucun article existant avec cet identifiant';
        }
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

    private function buildObject(array $row)
    {
        $article = new Post();
        $article->setId($row['id']);
        $article->setIdUser($row['id_user']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setChapo($row['chapo']);
        $article->setCreationDate($row['creation_date']);

        return $article;
    }
}
