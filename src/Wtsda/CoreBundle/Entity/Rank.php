<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Ranks")
 */
class Rank
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
     * @ORM\ManyToOne(targetEntity="RankGroup", inversedBy="ranks")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $rankGroup;


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
     * @return Rank
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
     * @return Rank
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
     * Set rankGroup
     *
     * @param \Wtsda\CoreBundle\Entity\RankGroup $rankGroup
     * @return Rank
     */
    public function setRankGroup(\Wtsda\CoreBundle\Entity\RankGroup $rankGroup = null)
    {
        $this->rankGroup = $rankGroup;

        return $this;
    }

    /**
     * Get rankGroup
     *
     * @return \Wtsda\CoreBundle\Entity\RankGroup 
     */
    public function getRankGroup()
    {
        return $this->rankGroup;
    }
}
