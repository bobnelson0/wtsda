<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="RankGroups")
 */
class RankGroup
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
     * @ORM\Column(type="integer")
     */
    protected $ord;

    /**
     * @ORM\OneToMany(targetEntity="Rank", mappedBy="rankGroup")
     */
    protected $ranks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ranks = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return RankGroup
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
     * Set ord
     *
     * @param int $ord
     * @throws \InvalidArgumentException if $ord is not an integer
     * @return RankGroup
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
     * Add ranks
     *
     * @param \Wtsda\CoreBundle\Entity\Rank $ranks
     * @return RankGroup
     */
    public function addRank(\Wtsda\CoreBundle\Entity\Rank $ranks)
    {
        $this->ranks[] = $ranks;
        return $this;
    }

    /**
     * Remove ranks
     *
     * @param \Wtsda\CoreBundle\Entity\Rank $ranks
     * @return RankGroup
     */
    public function removeRank(\Wtsda\CoreBundle\Entity\Rank $ranks)
    {
        $this->ranks->removeElement($ranks);
        return $this;
    }

    /**
     * Get ranks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRanks()
    {
        return $this->ranks;
    }
}
