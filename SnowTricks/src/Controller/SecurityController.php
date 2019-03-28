<?php

namespace App\Controller;

use App\Entity\Token;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Security\LoginFormAuthenticator;
use App\Service\TokenSendler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $passwordEncoder, TokenSendler $tokenSendler)
    {
        $user = new User;
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $passwordEncoded = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passwordEncoded)
                ->setEnable(false)
                ->setRoles(['ROLE_USER']);

            $token = new Token($user);
            $manager->persist($token);
            $manager->flush();

            $tokenSendler->sendToken($user, $token);

            $this->addFlash(
                'warning',
                'Un email de comfirmation vous a été enoyé, veuilez cliquer sur le lien pour activer votre compte.'
            );
            return $this->redirectToRoute('home');
        }


        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/confirmation/{value}", name="token_validation")
     */
    public function validateToken(Token $token, EntityManagerInterface $manager, Request $request, GuardAuthenticatorHandler $authenticatorHandler, LoginFormAuthenticator $loginFormAuthenticator)
    {
        $user = $token->getUser();

        if ($user->getEnable()) {
            $this->addFlash(
                'success',
                'Le token est déjà validé'
            );
            return $this->redirectToRoute('home');
        }

        if ($token->isValid()) {
            $user->setEnable(true);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Compte est activé.'
            );

            return $authenticatorHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $loginFormAuthenticator,
                'main'
            );
        }

        $manager->remove($token);
        $manager->flush();

        $this->addFlash(
            'danger',
            'Le token est expiré, inscrivez-vous à nouveau'
        );
        return $this->redirectToRoute('registration');

    }
}
