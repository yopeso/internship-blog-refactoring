<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PictureRepository")
 */
class Picture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @Assert\Image(
     *     mimeTypes= {"image/jpeg", "image/jpg", "image/png"},
     *     mimeTypesMessage = "Veuillez selectionner une image en .jpg, .jpeg ou .png",
     *     minWidth = 400,
     *     minWidthMessage = "L'image est trop petit, largeur minimun: 400",
     *     minHeight = 200,
     *     minHeightMessage = "L'image est trop petit, hauteur minimun: 200",
     *     maxWidth = 4000,
     *     maxWidthMessage = "L'image est trop grande, largeur max:4000",
     *     maxHeight = 2000,
     *     maxHeightMessage ="L'image est trop grande, hauteur max:2000"
     * )
     */
    private $file;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Trick", mappedBy="pictures")
     */
    private $tricks;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $alt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Trick", mappedBy="pictureDefault" ,cascade={"persist"})
     */
    private $trickForDefaultPicture;



    public function __construct()
    {
        $this->tricks = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return Collection|Trick[]
     */
    public function getTricks(): Collection
    {
        return $this->tricks;
    }

    public function addTrick(Trick $trick): self
    {
        if (!$this->tricks->contains($trick)) {
            $this->tricks[] = $trick;
            $trick->addPicture($this);
        }

        return $this;
    }

    public function removeTrick(Trick $trick): self
    {
        if ($this->tricks->contains($trick)) {
            $this->tricks->removeElement($trick);
            $trick->removePicture($this);
        }

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getTrickForDefaultPicture()
    {
        return $this->trickForDefaultPicture;
    }

    public function setTrickForDefaultPicture($trickForDefaultPicture): self
    {
        $this->trickForDefaultPicture = $trickForDefaultPicture;

        return $this;
    }
}
