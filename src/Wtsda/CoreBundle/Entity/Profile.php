<?php

namespace Wtsda\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Profiles")
 */
class Profile
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
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $middleName;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=6)
     */
    protected $associationNumber;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateOfBirth;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $gender;

    /**
     * @ORM\OneToMany(targetEntity="ProfileAddress", mappedBy="profile")
     */
    protected $addresses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add addresses
     *
     * @param \Wtsda\CoreBundle\Entity\ProfileAddress $addresses
     * @return address
     */
    public function addAddress(\Wtsda\CoreBundle\Entity\ProfileAddress $addresses)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \Wtsda\CoreBundle\Entity\ProfileAddress $addresses
     * @return Profile
     */
    public function removeAddress(\Wtsda\CoreBundle\Entity\ProfileAddress $addresses)
    {
        $this->addresses->removeElement($addresses);
        return $this;
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add phoneNumbers
     *
     * @param \Wtsda\CoreBundle\Entity\ProfilePhoneNumber $phoneNumbers
     * @return Profile
     */
    public function addPhoneNumber(\Wtsda\CoreBundle\Entity\ProfilePhoneNumber $phoneNumbers)
    {
        $this->phoneNumbers[] = $phoneNumbers;
        return $this;
    }

    /**
     * Remove phoneNumbers
     *
     * @param \Wtsda\CoreBundle\Entity\ProfilePhoneNumber $phoneNumbers
     * @return Profile
     */
    public function removePhoneNumber(\Wtsda\CoreBundle\Entity\ProfilePhoneNumber $phoneNumbers)
    {
        $this->phoneNumbers->removeElement($phoneNumbers);
        return $this;
    }

    /**
     * Get phoneNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * Add emailAddresses
     *
     * @param \Wtsda\CoreBundle\Entity\ProfileEmailAddress $emailAddresses
     * @return Profile
     */
    public function addEmailAddresses(\Wtsda\CoreBundle\Entity\ProfileEmailAddress $emailAddresses)
    {
        $this->emailAddresses[] = $emailAddresses;
        return $this;
    }

    /**
     * Remove emailAddresses
     *
     * @param \Wtsda\CoreBundle\Entity\ProfileEmailAddress $emailAddresses
     * @return Profile
     */
    public function removeEmailAddresses(\Wtsda\CoreBundle\Entity\ProfileEmailAddress $emailAddresses)
    {
        $this->emailAddresses->removeElement($emailAddresses);
        return $this;
    }

    /**
     * Get emailAddresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmailAddresses()
    {
        return $this->emailAddresses;
    }



    /**
     * class only:
     * id
     * firstname
     * middlename
     * lastname
     * assocNum
     * dob
     * gender
     * active
     *
     *
     * linked:
     * rank
     * dojang
     * judge_cert
     * inst_cert
     *
     *
     */
}