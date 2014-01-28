<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Wtsda\CoreBundle\Entity\Hyung;

/**
 * @ORM\Entity
 * @ORM\Table(name="HyungTypes")
 */
class HyungType {

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
     * @ORM\OneToMany(targetEntity="Hyung", mappedBy="type")
     */
    protected $hyungs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hyungs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return HyungType
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
     * Add hyungs
     *
     * @param \Wtsda\CoreBundle\Entity\Hyung $hyungs
     * @return HyungType
     */
    public function addHyung(\Wtsda\CoreBundle\Entity\Hyung $hyungs)
    {
        $this->hyungs[] = $hyungs;
        return $this;
    }

    /**
     * Remove hyungs
     *
     * @param \Wtsda\CoreBundle\Entity\Hyung $hyungs
     */
    public function removeHyung(\Wtsda\CoreBundle\Entity\Hyung $hyungs)
    {
        $this->hyungs->removeElement($hyungs);
    }

    /**
     * Get hyungs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHyungs()
    {
        return $this->hyungs;
    }
}
