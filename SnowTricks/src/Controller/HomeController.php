<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Trick;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\TrickRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TrickRepository $trickRepo)
    {
        return $this->render('home/index.html.twig', [
                'tricks' => $trickRepo->findBy([], ['dateCreation' => 'DESC'], 5, 0),
            ]
        );
    }

    /**
     * @Route("/{trick<\d+>?5}", name="load_more_trick")
     */
    public function loadMoreTrick(TrickRepository $trickRepo, $trick = 5)
    {
        return $this->render('home/load_more.html.twig', [
                'tricks' => $trickRepo->findBy([], ['dateCreation' => 'DESC'], 5, $trick),
            ]
        );
    }

    /**
     * @Route("/trick/{id}", name="show")
     */
    public function show(Trick $trick, Request $request, EntityManagerInterface $manager, CommentRepository $commentRepo)
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setTrick($trick)
                ->setUser($this->getUser());


            $manager->persist($comment);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre commentaire a bien été ajouté !'
            );

            return $this->redirectToRoute('show', [
                    'id' => $trick->getId(),
                ]
            );
        }

        return $this->render('home/trick.html.twig', [
                'form' => $form->createView(),
                'trick' => $trick,
                'comments' => $commentRepo->findBy(['trick' => $trick->getId()], ['dateCreation' => 'DESC'], 5, 0)
            ]
        );
    }

    /**
     * @Route("/trick/{id}/{comment<\d+>?15}", name="load_more_comment")
     */
    public function loadMoreComment(Trick $trick, CommentRepository $commentRepo, $comment = 15)
    {
        return $this->render('home/load_Comment.html.twig', [
                'comments' => $commentRepo->findBy(['trick' => $trick->getId()], ['dateCreation' => 'DESC'], 15, $comment)
            ]
        );
    }


}
