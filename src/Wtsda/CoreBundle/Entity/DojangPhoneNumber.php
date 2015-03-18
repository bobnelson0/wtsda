<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DojangPhoneNumbers")
 */
class DojangPhoneNumber extends MappedSuperClass\PhoneNumber
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Dojang", inversedBy="phoneNumbers")
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
     * @return DojangPhoneNumber
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