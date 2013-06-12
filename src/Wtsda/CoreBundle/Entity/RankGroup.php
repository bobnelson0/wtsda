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
     * @ORM\Column(name="`order`", type="integer")
     */
    protected $order;

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
     * Set order
     *
     * @param integer $order
     * @return RankGroup
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
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
     */
    public function removeRank(\Wtsda\CoreBundle\Entity\Rank $ranks)
    {
        $this->ranks->removeElement($ranks);
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
