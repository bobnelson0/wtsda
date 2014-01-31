<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Permissions")
 */
class Permission
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $resource;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\ManyToMany(targetEntity="Role", mappedBy="permissions")
     */
    protected $roles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set resource
     *
     * @param string $resource
     * @return Permission
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Permission
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
     * Add roles
     *
     * @param \Wtsda\CoreBundle\Entity\Role $roles
     * @return Permission
     */
    public function addRole(\Wtsda\CoreBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Wtsda\CoreBundle\Entity\Role $roles
     * @return Permission
     */
    public function removeRole(\Wtsda\CoreBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
        return $this;
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
