<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Entity\Trick;
use App\Entity\Video;
use App\Form\PictureType;
use App\Form\TrickType;
use App\Form\VideoType;
use App\Repository\PictureRepository;
use App\Repository\VideoRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Require ROLE_USER for *every* controller method in this class.
 *
 * @IsGranted("ROLE_USER")
 */
class TrickController extends AbstractController
{
    /**
     * @Route("user/trick/add", name="add_trick")
     */
    public function add(EntityManagerInterface $manager, Request $request)
    {
        $trick = new Trick();

        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $trick->setUser($user);
            $manager->persist($trick);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Trick a bien été ajouté !'
            );

            return $this->redirectToRoute('show', ['id' => $trick->getId()]);
        }

        return $this->render('home/add.html.twig', [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("user/trick/edit/{id}", name="edit_trick")
     */
    public function edit(EntityManagerInterface $manager, Request $request, Trick $trick)
    {
        $this->denyAccessUnlessGranted('EDIT', $trick);
        $form = $this->createForm(TrickType::class, $trick);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trick->setDateMaj(new \DateTime());

            $manager->flush();

            $this->addFlash(
                'warning',
                'Votre Trick a bien été modifier !'
            );

            return $this->redirectToRoute('show', ['id' => $trick->getId()]);
        }

        return $this->render('home/edit.html.twig', [
                'form' => $form->createView(),
                'trick' => $trick,
            ]
        );
    }

    /**
     * @Route("user/trick/delete/{id}", name="delete_trick")
     */
    public function deleteTrick(EntityManagerInterface $manager, Trick $trick)
    {
        $this->denyAccessUnlessGranted('DELETE', $trick);

        $manager->remove($trick);

        $manager->flush();

        $this->addFlash(
            'danger',
            'Votre Trick a bien été supprimer !'
        );

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("user/trick/picture/add", name="add_picture")
     */
    public function addPicture(EntityManagerInterface $manager, Request $request, FileUploader $fileUploader, PictureRepository $pictureRepo)
    {
        $pictures = $pictureRepo->findBy(
            array(),
            array('id' => 'DESC')
        );

        $picture = new Picture();

        $form = $this->createForm(PictureType::class, $picture);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $picture = $form->getData();

            $file = $picture->getFile();

            $fileName = $fileUploader->upload($file);

            $picture->setName($fileName);

            $manager->persist($picture);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Image a bien été ajouté !'
            );

            return $this->redirectToRoute('add_picture');
        }

        return $this->render('home/add_picture.html.twig', [
                'form' => $form->createView(),
                'pictures' => $pictures,
            ]
        );
    }

    /**
     * @Route("user/trick/picture/delete/{id}", name="delete_picture")
     */
    public function deletePicture(EntityManagerInterface $manager, Picture $picture, FileUploader $fileUploader)
    {
        //supprime le fichier de l'image
        $oldFileName = $picture->getName();
        $fileUploader->removeFile($oldFileName);

        $manager->remove($picture);

        $manager->flush();

        $this->addFlash(
            'danger',
            'Votre image a bien été supprimer !'
        );

        return $this->redirectToRoute('add_picture');
    }

    /**
     * @Route("user/trick/video/add", name="add_video")
     */
    public function addVideo(EntityManagerInterface $manager, Request $request, VideoRepository $videoRepo)
    {
        $videos = $videoRepo->findBy(
            array(),
            array('id' => 'DESC')
        );

        $video = new Video();

        $form = $this->createForm(VideoType::class, $video);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($video);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre Video a bien été ajouté !'
            );

            return $this->redirectToRoute('add_video');
        }

        return $this->render('home/add_video.html.twig', [
                'form' => $form->createView(),
                'videos' => $videos,
            ]
        );
    }

    /**
     * @Route("user/trick/video/delete/{id}", name="delete_video")
     */
    public function deleteVideo(EntityManagerInterface $manager, Video $video)
    {
        $manager->remove($video);

        $manager->flush();

        $this->addFlash(
            'danger',
            'Votre video a bien été supprimer !'
        );

        return $this->redirectToRoute('add_video');
    }
}
