<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Regions")
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ord;

    /**
     * @ORM\OneToMany(targetEntity="Dojang", mappedBy="region")
     */
    protected $dojangs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dojangs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set number
     *
     * @param string $number
     * @throws \InvalidArgumentException if $number is not an integer
     * @return Region
     */
    public function setNumber($number)
    {
        if(!is_int($number)) {
            throw new \InvalidArgumentException;
        }
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Region
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
     * @return Region
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
     * Add dojangs
     *
     * @param \Wtsda\CoreBundle\Entity\Dojang $dojangs
     * @return address
     */
    public function addDojang(\Wtsda\CoreBundle\Entity\Dojang $dojangs)
    {
        $this->dojangs[] = $dojangs;
        return $this;
    }

    /**
     * Remove dojangs
     *
     * @param \Wtsda\CoreBundle\Entity\Dojang $dojangs
     */
    public function removeDojang(\Wtsda\CoreBundle\Entity\Dojang $dojangs)
    {
        $this->dojangs->removeElement($dojangs);
    }

    /**
     * Get dojangs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDojangs()
    {
        return $this->dojangs;
    }
}