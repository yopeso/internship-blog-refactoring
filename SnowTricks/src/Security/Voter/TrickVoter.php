<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class TrickVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        return in_array($attribute, ['EDIT', 'DELETE'])
            && $subject instanceof \App\Entity\Trick;
    }

    protected function voteOnAttribute($attribute, $trick, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        if(null == $trick->getUser()) {
            return false;
        }
        if ($user->isAdmin()){
            return true;
        }
        switch ($attribute) {
            case 'EDIT':
                return $trick->getUser()->getId() == $user->getId();
                break;
            case 'DELETE':
                return $trick->getUser()->getId() == $user->getId();
                break;
        }

        return false;
    }
}
