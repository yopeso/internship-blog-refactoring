<?php

namespace App\Model;

class Comment
{
    private $id;
    private $postId;
    private $idUser;
    private $comment;
    private $commentDate;
    private $valid;

    /**
     * Get the value of id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of postId.
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set the value of postId.
     *
     * @return self
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get the value of idUser.
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser.
     *
     * @return self
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of comment.
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of commentDate.
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set the value of commentDate.
     *
     * @return self
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get the value of valid.
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set the value of valid.
     *
     * @return self
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }
}
