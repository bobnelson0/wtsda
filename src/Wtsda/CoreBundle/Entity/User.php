<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastLogin", type="datetimetz")
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=40, nullable=true)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToMany(targetEntity="Permission", inversedBy="users")
     * @ORM\JoinTable(name="UserPermissions")
     */
    protected $permissions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permissions = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return User
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return User
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @throws \InvalidArgumentException if $active is boolean
     * @return User
     */
    public function setActive($active)
    {
        if(!is_bool($active)) {
            throw new \InvalidArgumentException;
        }
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
     * Add permissions
     *
     * @param \Wtsda\CoreBundle\Entity\Permission $permissions
     * @return User
     */
    public function addPermission(Permission $permissions)
    {
        $this->permissions[] = $permissions;
        return $this;
    }

    /**
     * Remove permissions
     *
     * @param \Wtsda\CoreBundle\Entity\Permission $permissions
     * @return User
     */
    public function removePermission(Permission $permissions)
    {
        $this->permissions->removeElement($permissions);
        return $this;
    }

    /**
     * Get permissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}

