<?php
/** TODO: change class to reflect google maps: https://developers.google.com/maps/documentation/geocoding/#Results */
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return string
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return string
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return string
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set locality
     *
     * @param string $locality
     * @return string
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * Get locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set neighborhood
     *
     * @param string $neighborhood
     * @return string
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set adminDistrict
     *
     * @param string $adminDistrict
     * @return string
     */
    public function setAdminDistrict($adminDistrict)
    {
        $this->adminDistrict = $adminDistrict;
        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return string
     */
    public function getAdminDistrict()
    {
        return $this->adminDistrict;
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
