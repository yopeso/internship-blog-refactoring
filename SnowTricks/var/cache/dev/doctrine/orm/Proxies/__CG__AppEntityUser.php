<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enable', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tricks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pseudo', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'oldPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokens', '' . "\0" . 'App\\Entity\\User' . "\0" . 'profilePicture'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enable', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tricks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pseudo', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'oldPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tokens', '' . "\0" . 'App\\Entity\\User' . "\0" . 'profilePicture'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function isAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAdmin', []);

        return parent::isAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getEnable(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnable', []);

        return parent::getEnable();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnable(bool $enable): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnable', [$enable]);

        return parent::setEnable($enable);
    }

    /**
     * {@inheritDoc}
     */
    public function getTricks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTricks', []);

        return parent::getTricks();
    }

    /**
     * {@inheritDoc}
     */
    public function addTrick(\App\Entity\Trick $trick): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTrick', [$trick]);

        return parent::addTrick($trick);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTrick(\App\Entity\Trick $trick): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTrick', [$trick]);

        return parent::removeTrick($trick);
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
    public function addComment(\App\Entity\Comment $comment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\App\Entity\Comment $comment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getPseudo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPseudo', []);

        return parent::getPseudo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPseudo(string $pseudo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPseudo', [$pseudo]);

        return parent::setPseudo($pseudo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword(?string $plainPassword): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$plainPassword]);

        return parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getOldPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOldPassword', []);

        return parent::getOldPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setOldPassword(?string $oldPassword): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOldPassword', [$oldPassword]);

        return parent::setOldPassword($oldPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokens(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokens', []);

        return parent::getTokens();
    }

    /**
     * {@inheritDoc}
     */
    public function addToken(\App\Entity\Token $token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addToken', [$token]);

        return parent::addToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function removeToken(\App\Entity\Token $token): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeToken', [$token]);

        return parent::removeToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfilePicture(): ?\App\Entity\ProfilePicture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfilePicture', []);

        return parent::getProfilePicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfilePicture(?\App\Entity\ProfilePicture $profilePicture): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfilePicture', [$profilePicture]);

        return parent::setProfilePicture($profilePicture);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

}