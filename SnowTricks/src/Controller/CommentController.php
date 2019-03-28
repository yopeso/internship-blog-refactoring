<?php

namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Require ROLE_USER for *every* controller method in this class.
 *
 * @IsGranted("ROLE_USER")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/user/comment/delete/{id}", name="delete_comment")
     */
    public function deleteComment(EntityManagerInterface $manager, Comment $comment)
    {
        $this->denyAccessUnlessGranted('DELETE_COMMENT', $comment);

        $manager->remove($comment);

        $manager->flush();

        $this->addFlash(
            'danger',
            'Votre commentaire a bien été supprimer !'
        );

        return $this->redirectToRoute('account');
    }
}
