<?php

namespace UnitTests\App\Controller;

use App\Controller\AccountController;
use App\Manager\CommentManager;
use App\Manager\SessionManager;
use App\Model\Comment;
use App\Model\User;
use Phake;
use PHPUnit\Framework\TestCase;

class AccountControllerTest extends TestCase
{
    public function testCommentingDenied()
    {
        //preconditions
        $userId = 1;
        $commentManager = Phake::mock(CommentManager::class);
        $comment = Phake::mock(Comment::class);

        $sessionManager = Phake::mock(SessionManager::class);
        $mockedUser = Phake::mock(User::class);
        Phake::when($mockedUser)->getStatus()->thenReturn(0);
        Phake::when($mockedUser)->getId()->thenReturn($userId);
        Phake::when($sessionManager)->getAuthenticatedUser()->thenReturn($mockedUser);

        Phake::when($commentManager)->getComment($userId)->thenReturn($comment);
        $accountController = new AccountController($commentManager, $sessionManager);

        // unit execution
        $accountController->comment($userId);

        // checks
        Phake::verify($commentManager, Phake::times(1))->getComment($userId);
        Phake::verify($sessionManager,
            Phake::times(1))->addFlashMessage('Vous n\'avez pas les droits pour modifier ce commentaire', 'danger'
        );
        Phake::verify($sessionManager, Phake::times(1))->redirectTo('/user');
        Phake::verify($mockedUser)->getStatus();
        Phake::verify($mockedUser)->getId();
        Phake::verify($comment)->getIdUser();
    }

    public function testCommentingAllowed()
    {
        // preconditions
        // unit execution
        // checks
        $this->assertTrue(true);
    }
}