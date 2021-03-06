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
     * @ORM\Column(type="string", length=30, unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ord;

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
     * Set ord
     *
     * @param int $ord
     * @throws \InvalidArgumentException if $ord is not an integer
     * @return Rank
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
     * Set rankGroup
     *
     * @param RankGroup $rankGroup
     * @return Rank
     */
    public function setRankGroup(RankGroup $rankGroup = null)
    {
        $this->rankGroup = $rankGroup;
        return $this;
    }

    /**
     * Get rankGroup
     *
     * @return RankGroup
     */
    public function getRankGroup()
    {
        return $this->rankGroup;
    }
}
