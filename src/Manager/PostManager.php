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
     * @return object $articleTotalesReq
     */
    public function getPostsTotal(): object
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
     * @return array $listposts
     */
    public function getPosts(int $depart, int $articlesParPage): array
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
     * @return object $post
     */
    public function getPost(int $postId): object
    {
        $sql = 'SELECT posts.id, 
                    posts.id_author, 
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
            header('Location: /blog');
        }
    }

    /**
     * Aperçu de tout les articles de l'interface admin.
     *
     * @return array $req
     */
    public function getPostPreview(): array
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
     * @return object mixed
     */
    public function setPost(int $id, string $title, int $idAuthor, string $chapo, string $content, int $idUser): object
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
     * @return object
     */
    public function addPost(string $title, int $idAuthor, string $chapo, string $content, int $idUser): object
    {
        $sql = 'INSERT INTO posts (title, id_author, chapo, content, id_user, creation_date) VALUES (:title, :id_author, :chapo, :content, :iduser, NOW())';
        $parameters = [':title' => $title,
        ':id_author' => $idAuthor,
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
     * @return object
     */
    public function removePost(int $postId): object
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
    private function buildObject(array $row): object
    {
        $article = new Post();
        if (!empty($row['id'])) {
            $article->setId($row['id']);
        }
        if (!empty($row['id_author'])) {
            $article->setidAuthor($row['id_author']);
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

    /**
     * Retourne tout les auteurs de la Bdd.
     *
     * @return array
     */
    public function getAllAuthors(): array
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

    /**
     * Construit l'objet Author.
     *
     * @param array $row
     *
     * @return object
     */
    private function buildObjectAuthor(array $row): object
    {
        $author = new Author();
        $author->setId($row['id']);
        $author->setAuthor($row['author']);

        return $author;
    }
}
