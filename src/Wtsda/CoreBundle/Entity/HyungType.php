<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
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
     * @ORM\Column(type="string", length=30, unique=true)
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
        $this->hyungs = new ArrayCollection();
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
     * @param Hyung $hyungs
     * @return HyungType
     */
    public function addHyung(Hyung $hyungs)
    {
        $this->hyungs[] = $hyungs;
        return $this;
    }

    /**
     * Remove hyungs
     *
     * @param Hyung $hyungs
     * @return HyungType
     */
    public function removeHyung(Hyung $hyungs)
    {
        $this->hyungs->removeElement($hyungs);
        return $this;
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
