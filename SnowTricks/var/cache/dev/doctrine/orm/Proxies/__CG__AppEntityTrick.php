<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Trick extends \App\Entity\Trick implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'trickCategory', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'pictures', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'videos', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'pictureDefault', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'dateMaj', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'trickCategory', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'pictures', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'videos', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'pictureDefault', '' . "\0" . 'App\\Entity\\Trick' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Trick $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation(\DateTimeInterface $dateCreation): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateMaj(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateMaj', []);

        return parent::getDateMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateMaj(\DateTimeInterface $dateMaj): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateMaj', [$dateMaj]);

        return parent::setDateMaj($dateMaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrickCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrickCategory', []);

        return parent::getTrickCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrickCategory(?\App\Entity\Category $trickCategory): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrickCategory', [$trickCategory]);

        return parent::setTrickCategory($trickCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\App\Entity\Comment $comment): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\App\Entity\Comment $comment): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function updateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDate', []);

        return parent::updateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPictures(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictures', []);

        return parent::getPictures();
    }

    /**
     * {@inheritDoc}
     */
    public function addPicture(\App\Entity\Picture $picture): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPicture', [$picture]);

        return parent::addPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function removePicture(\App\Entity\Picture $picture): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePicture', [$picture]);

        return parent::removePicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideos', []);

        return parent::getVideos();
    }

    /**
     * {@inheritDoc}
     */
    public function addVideo(\App\Entity\Video $video): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVideo', [$video]);

        return parent::addVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVideo(\App\Entity\Video $video): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVideo', [$video]);

        return parent::removeVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictureDefault(): ?\App\Entity\Picture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictureDefault', []);

        return parent::getPictureDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictureDefault(\App\Entity\Picture $pictureDefault): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictureDefault', [$pictureDefault]);

        return parent::setPictureDefault($pictureDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Trick
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}