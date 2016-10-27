<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"}), @ORM\UniqueConstraint(name="apikey", columns={"apikey"})})
 * @ORM\Entity
 */
class User implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="userID", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=160, nullable=false, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="mail", type="string", length=160, nullable=false, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="password", type="string", length=254, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=160, nullable=true)
     */
    private $alias;

    /**
     * FIXME remove me
     *
     * @var boolean
     *
     * @ORM\Column(name="trash", type="boolean", nullable=false)
     */
    private $trash = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="passwordResetHash", type="string", length=32, nullable=true)
     */
    private $passwordresethash;

    /**
     * @var string
     *
     * @ORM\Column(name="secure", type="string", length=60, nullable=false)
     */
    private $secure = '0';

    /**
     * FIXME manytoone relation
     *
     * @var integer
     *
     * @ORM\Column(name="lastProject", type="integer", nullable=false)
     */
    private $lastproject = '1';

    /**
     * FIXME manytoone
     *
     * @var integer
     *
     * @ORM\Column(name="lastActivity", type="integer", nullable=false)
     */
    private $lastactivity = '1';

    /**
     * FIXME manytoone
     *
     * @var integer
     *
     * @ORM\Column(name="lastRecord", type="integer", nullable=false)
     */
    private $lastrecord = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="timeframeBegin", type="string", length=60, nullable=false)
     */
    private $timeframebegin = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="timeframeEnd", type="string", length=60, nullable=false)
     */
    private $timeframeend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="apikey", type="string", length=30, nullable=true)
     */
    private $apikey;

    // ======= new columns for kimai 2 =======
    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = [];

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=50, nullable=true)
     */
    private $avatar;

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return User
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set trash
     *
     * @param boolean $trash
     *
     * @return User
     */
    public function setTrash($trash)
    {
        $this->trash = $trash;

        return $this;
    }

    /**
     * Get trash
     *
     * @return boolean
     */
    public function getTrash()
    {
        return $this->trash;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordresethash
     *
     * @param string $passwordresethash
     *
     * @return User
     */
    public function setPasswordresethash($passwordresethash)
    {
        $this->passwordresethash = $passwordresethash;

        return $this;
    }

    /**
     * Get passwordresethash
     *
     * @return string
     */
    public function getPasswordresethash()
    {
        return $this->passwordresethash;
    }

    /**
     * Set ban
     *
     * @param integer $ban
     *
     * @return User
     */
    public function setBan($ban)
    {
        $this->ban = $ban;

        return $this;
    }

    /**
     * Get ban
     *
     * @return integer
     */
    public function getBan()
    {
        return $this->ban;
    }

    /**
     * Set bantime
     *
     * @param integer $bantime
     *
     * @return User
     */
    public function setBantime($bantime)
    {
        $this->bantime = $bantime;

        return $this;
    }

    /**
     * Get bantime
     *
     * @return integer
     */
    public function getBantime()
    {
        return $this->bantime;
    }

    /**
     * Set secure
     *
     * @param string $secure
     *
     * @return User
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;

        return $this;
    }

    /**
     * Get secure
     *
     * @return string
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Set lastproject
     *
     * @param integer $lastproject
     *
     * @return User
     */
    public function setLastproject($lastproject)
    {
        $this->lastproject = $lastproject;

        return $this;
    }

    /**
     * Get lastproject
     *
     * @return integer
     */
    public function getLastproject()
    {
        return $this->lastproject;
    }

    /**
     * Set lastactivity
     *
     * @param integer $lastactivity
     *
     * @return User
     */
    public function setLastactivity($lastactivity)
    {
        $this->lastactivity = $lastactivity;

        return $this;
    }

    /**
     * Get lastactivity
     *
     * @return integer
     */
    public function getLastactivity()
    {
        return $this->lastactivity;
    }

    /**
     * Set lastrecord
     *
     * @param integer $lastrecord
     *
     * @return User
     */
    public function setLastrecord($lastrecord)
    {
        $this->lastrecord = $lastrecord;

        return $this;
    }

    /**
     * Get lastrecord
     *
     * @return integer
     */
    public function getLastrecord()
    {
        return $this->lastrecord;
    }

    /**
     * Set timeframebegin
     *
     * @param string $timeframebegin
     *
     * @return User
     */
    public function setTimeframebegin($timeframebegin)
    {
        $this->timeframebegin = $timeframebegin;

        return $this;
    }

    /**
     * Get timeframebegin
     *
     * @return string
     */
    public function getTimeframebegin()
    {
        return $this->timeframebegin;
    }

    /**
     * Set timeframeend
     *
     * @param string $timeframeend
     *
     * @return User
     */
    public function setTimeframeend($timeframeend)
    {
        $this->timeframeend = $timeframeend;

        return $this;
    }

    /**
     * Get timeframeend
     *
     * @return string
     */
    public function getTimeframeend()
    {
        return $this->timeframeend;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     *
     * @return User
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the roles or permissions granted to the user for security.
     */
    public function getRoles()
    {
        $roles = $this->roles;

        // guarantees that a user always has at least one role for security
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     */
    public function getSalt()
    {
        // See "Do you need to use a Salt?" at http://symfony.com/doc/current/cookbook/security/entity_provider.html
        // we're using bcrypt in security.yml to encode the password, so
        // the salt value is built-in and you don't have to generate one

        return;
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials()
    {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function __toString()
    {
        return $this->getAlias() ?: $this->getUsername();
    }
}