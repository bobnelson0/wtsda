<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DojangAddresses")
 */
class DojangAddress extends MappedSuperClass\Address
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Dojang", inversedBy="addresses")
     * @ORM\JoinColumn(referencedColumnName="id")
     **/
    protected $dojang;

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
     * Set dojang
     *
     * @param \Wtsda\CoreBundle\Entity\Dojang $dojang
     * @return DojangAddress
     */
    public function setDojang(\Wtsda\CoreBundle\Entity\Dojang $dojang = null)
    {
        $this->dojang = $dojang;
        return $this;
    }

    /**
     * Get dojang
     *
     * @return \Wtsda\CoreBundle\Entity\Dojang
     */
    public function getDojang()
    {
        return $this->dojang;
    }
}
