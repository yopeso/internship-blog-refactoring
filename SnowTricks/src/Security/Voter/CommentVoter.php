<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class CommentVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        return in_array($attribute, ['DELETE_COMMENT', 'EDIT_COMMENT'])
            && $subject instanceof \App\Entity\Comment;
    }

    protected function voteOnAttribute($attribute, $comment, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }
        if(null == $comment->getUser()) {
            return false;
        }
        if ($user->isAdmin()){
            return true;
        }
        switch ($attribute) {
            case 'EDIT_COMMENT':
                return $comment->getUser()->getId() == $user->getId();
                break;
            case 'DELETE_COMMENT':
                return $comment->getUser()->getId() == $user->getId();
                break;
        }

        return false;
    }
}
