<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Wtsda\CoreBundle\Entity\Permission;

/**
 * @ORM\Entity
 * @ORM\Table(name="Roles")
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ord;

    /**
     * @ORM\ManyToMany(targetEntity="Permission", inversedBy="roles")
     * @ORM\JoinTable(name="RolePermissions")
     */
    protected $permissions;

    /*
    public function setOrd($ord)
    {
        if(!is_int($ord)) {
            throw new \InvalidArgumentException;
        }
        $this->ord = $ord;
        return $this;
    }
    */
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
     * Set name
     *
     * @param string $name
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Role
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ord
     *
     * @param int $ord
     * @throws \InvalidArgumentException if $ord is not an integer
     * @return Role
     */
    public function setOrd($ord)
    {
        if(!is_int($ord)) {
            throw new \InvalidArgumentException;
        }
        $this->ord = $ord;
        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Add permissions
     *
     * @param \Wtsda\CoreBundle\Entity\Permission $permissions
     * @return Role
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
     * @return Role
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
