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