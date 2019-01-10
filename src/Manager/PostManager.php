<?php

namespace App\Manager;

use App\Model\Post;
use App\Model\Author;
use App\Service\Database;

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
        $sql = 'SELECT id FROM posts';
        $result = $this->sql($sql);

        return $result;
    }

    /**
     * Retourne les articles avec un point de départ et d'arriver.
     *
     * @param int $depart
     * @param int $articlesParPage
     *
     * @return mixed $listposts
     */
    public function getPosts($depart, $articlesParPage)
    {
        $sql = 'SELECT id, title, chapo, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT :depart , :articlesparpage';
        $bind = [[':depart', $depart, \PDO::PARAM_INT], [':articlesparpage', $articlesParPage, \PDO::PARAM_INT]];
        $result = $this->sql($sql, null, $bind);

        $articles = [];

        foreach ($result as $row) {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }

        return $articles;
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
        $sql = 'SELECT posts.id, 
                    posts.title, 
                    posts.chapo, 
                    posts.content, 
                    posts.id_user, 
                    authors.author, 
                    DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr 
                    FROM posts 
                    LEFT JOIN authors on posts.id_author = authors.id
                    WHERE posts.id = :postId';

        $parameters = [':postId' => $postId];
        $result = $this->sql($sql, $parameters);

        $row = $result->fetch();

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
        $sql = 'SELECT id, title, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY creation_date DESC';
        $result = $this->sql($sql);

        $articles = [];

        foreach ($result as $row) {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }

        return $articles;
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
    public function setPost($id, $title, $idAuthor, $chapo, $content, $idUser)
    {
        $sql = 'UPDATE posts SET title = :title, id_author = :id_author, chapo = :chapo, content = :content, id_user = :iduser ,creation_date = NOW() WHERE id = :id';
        $parameters = [':id' => $id,
        ':id_author' => $idAuthor,
        ':title' => $title,
        ':chapo' => $chapo,
        ':content' => $content,
        ':iduser' => $idUser, ];
        $result = $this->sql($sql, $parameters);

        return $result;
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
        $sql = 'INSERT INTO posts (title, chapo, content, id_user, creation_date) VALUES (:title, :chapo, :content, :iduser, NOW())';
        $parameters = [':title' => $title,
            ':chapo' => $chapo,
            ':content' => $content,
            ':iduser' => $idUser, ];
        $result = $this->sql($sql, $parameters);

        return $result;
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
        $sql = 'DELETE FROM posts WHERE id = :postId';
        $parameters = [':postId' => $postId];
        $result = $this->sql($sql, $parameters);

        return $result;
    }

    /**
     * Construit l'objet Article.
     *
     * @param array $row envoi le résultat de la requête sql
     *
     * @return object $article retourne l'objet construit
     */
    private function buildObject(array $row)
    {
        $article = new Post();
        if (!empty($row['id'])) {
            $article->setId($row['id']);
        }
        if (!empty($row['author'])) {
            $article->setAuthor($row['author']);
        }
        if (!empty($row['id_user'])) {
            $article->setIdUser($row['id_user']);
        }
        if (!empty($row['title'])) {
            $article->setTitle($row['title']);
        }
        if (!empty($row['content'])) {
            $article->setContent($row['content']);
        }
        if (!empty($row['chapo'])) {
            $article->setChapo($row['chapo']);
        }
        if (!empty($row['creation_date_fr'])) {
            $article->setCreationDate($row['creation_date_fr']);
        }

        return $article;
    }

    public function getAllAuthors()
    {
        $sql = 'SELECT * FROM authors';
        $result = $this->sql($sql);

        $author = [];

        foreach ($result as $row) {
            $authorId = $row['id'];
            $authors[$authorId] = $this->buildObjectAuthor($row);
        }

        return $authors;
    }

    private function buildObjectAuthor(array $row)
    {
        $author = new Author();
        $author->setId($row['id']);
        $author->setAuthor($row['author']);

        return $author;
    }
}
