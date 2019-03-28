<?php

namespace App\Controller;

use App\Entity\ProfilePicture;
use App\Entity\Token;
use App\Form\ForGotPasswordType;
use App\Form\RestPasswordType;
use App\Form\UpdatePasswordType;
use App\Form\UserProfilePictureType;
use App\Repository\UserRepository;
use App\Service\TargetDirectory;
use App\Service\TokenSendler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    /**
     * @Route("user/account/dashboard", name="account")
     * @IsGranted("ROLE_USER")
     */
    public function index()
    {
        return $this->render('account/dashboard.html.twig', [
            'tricks' => $this->getUser()->getTricks(),
            'comments' => $this->getUser()->getComments(),
        ]);
    }

    /**
     * @Route("user/account/update-password", name="update_password")
     * @IsGranted("ROLE_USER")
     */
    public function updatePassword(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();

        $form = $this->createForm(UpdatePasswordType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($passwordEncoder->isPasswordValid($user, $user->getOldPassword())) {

                $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());

                $user->setPassword($newEncodedPassword);

                $manager->persist($user);
                $manager->flush();

                $this->addFlash('success', 'Votre mot de passe à bien été modifié !');

                return $this->redirectToRoute('account');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }

        return $this->render('account/update_password.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("user/account/picture/add", name="add_picture_user")
     * @IsGranted("ROLE_USER")
     */
    public function addPictureUser(EntityManagerInterface $manager, Request $request)
    {
        $user = $this->getUser();
        $profilePicture = new ProfilePicture;
        $form = $this->createForm(UserProfilePictureType::class, $profilePicture);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $path = $this->targetDirectory;

            $profilePicture->setTargetDirectory($path);

            $user->setProfilePicture($profilePicture);

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Image de profile a bien été ajouté !'
            );

            return $this->redirectToRoute('account');
        }

        return $this->render('account/edit_picture_user.html.twig', [
            'form' => $form->createView(),
            'picture' => $this->getUser()->getProfilePicture(),
        ]);
    }

    /**
     * @Route("user/account/picture/edit", name="edit_picture_user")
     * @IsGranted("ROLE_USER")
     */
    public function editPictureUser(EntityManagerInterface $manager, Request $request)
    {
        $profilePicture = $this->getUser()->getProfilePicture();

        $form = $this->createForm(UserProfilePictureType::class, $profilePicture);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $path = $this->targetDirectory;
            $profilePicture->setTargetDirectory($path);

            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Image de profile a bien été mise à jour !'
            );

            return $this->redirectToRoute('edit_picture_user');
        }
        return $this->render('account/edit_picture_user.html.twig', [
            'form' => $form->createView(),
            'picture' => $this->getUser()->getProfilePicture(),
        ]);

    }

    /**
     * @Route("/account/forgot-password", name="forgot_password")
     */
    public function forGotPassword(Request $request, EntityManagerInterface $manager, UserRepository $userRepo, TokenSendler $tokenSendler)
    {
        $form = $this->createForm(ForGotPasswordType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $email = $form->getData();
            $user = $userRepo->findOneByEmail($email->getEmail());

            if ($user !== null) {

                $token = new Token($user);
                $user->addToken($token);
                $manager->persist($user);
                $manager->flush();

                $tokenSendler->forGotToken($user, $token);

                $this->addFlash(
                    'danger',
                    "L'email de réinitilisation de mot de passe a été envoyé !"
                );
            } else {
                $form->addError(new FormError("Cet utilisateur n'existe pas !"));
            }
        }
        return $this->render('account/for_got_password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/account/rest-password/{value}", name="rest_password")
     */
    public function restPassword(Request $request, Token $token, UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager)
    {
        $user = $token->getUser();

        $form = $this->createForm(RestPasswordType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($token->isValid()) {
                $password = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($password);

                $manager->persist($user);
                $manager->remove($token);
                $manager->flush();

                $this->addFlash(
                    'success',
                    "Mot de passe a bien été modifié !"
                );
                return $this->redirectToRoute('app_login');

            } else {

                $this->addFlash(
                    'danger',
                    "La modification du mot de passe a échoué ! Le lien de validation a expiré !"
                );

                $manager->remove($token);
                $manager->flush();
            }
        }

        return $this->render('account/rest_password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/account/delete/{email}", name="delete_account")
     */
    public function deleteAccount(EntityManagerInterface $manager, $email)
    {
        if ($email === $this->getUser()->getEmail()) {
            $manager->remove($this->getUser());

            $manager->flush();

            $this->addFlash(
                'danger',
                'Votre compte à bien été supprimer !'
            );
            return $this->redirectToRoute('logout');
        } else {
            $this->addFlash(
                'danger',
                'Vous ne pouvez pas supprimer le compte de quelqu\'un d\'autre! ^^'
            );
            return $this->redirectToRoute('home');
        }

    }
}
