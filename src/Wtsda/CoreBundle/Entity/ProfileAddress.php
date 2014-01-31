<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ProfileAddresses")
 */
class ProfileAddress extends MappedSuperClass\Address
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="addresses")
     * @ORM\JoinColumn(referencedColumnName="id")
     **/
    protected $profile;

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
     * Set profile
     *
     * @param \Wtsda\CoreBundle\Entity\Profile $profile
     * @return ProfileAddress
     */
    public function setProfile(\Wtsda\CoreBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Get profile
     *
     * @return \Wtsda\CoreBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
