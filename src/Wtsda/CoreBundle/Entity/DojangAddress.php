<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="DojangAddresses")
 */
class DojangAddress
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
    protected $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $addressLine1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $addressLine2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $locality;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $neighborhood;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $adminDistrict;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $adminDistrict2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $formattedAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $postalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $countryRegion;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12, nullable=true)
     */
    protected $latitude;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12, nullable=true)
     */
    protected $longitude;

    /**
     * @ORM\ManyToOne(targetEntity="Dojang", inversedBy="addresses")
     * @ORM\JoinColumn(referencedColumnName="id")
     **/
    protected $dojang;

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
