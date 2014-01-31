<?php

namespace Wtsda\CoreBundle\Tests\Entity\MappedSuperClass;

use \Wtsda\CoreBundle\Entity\MappedSuperClass\EmailAddress;

class EmailAddressTest extends \PHPUnit_Framework_TestCase
{
    public function testSetTypeUpdatesType()
    {
        $em = new EmailAddress();
        $expected = 'type';
        $em->setType($expected);
        $actual = $em->getType();

        $this->assertEquals($expected, $actual);
    }

    public function testSetTypeReturnsObject()
    {
        $em = new EmailAddress();
        $expected = $em;
        $actual = $em->setType('type');

        $this->assertEquals($expected, $actual);
    }

    public function testGetTypeReturnsTypeString()
    {
        $em = new EmailAddress();
        $em->setType('type');
        $expected = 'type';
        $actual = $em->getType();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testSetEmailUpdatesEmail()
    {
        $em = new EmailAddress();
        $expected = 'user@email.com';
        $em->setEmail($expected);
        $actual = $em->getEmail();

        $this->assertEquals($expected, $actual);
    }

    public function testSetEmailReturnsObject()
    {
        $em = new EmailAddress();
        $expected = $em;
        $actual = $em->setEmail('user@gmail.com');

        $this->assertEquals($expected, $actual);
    }

    public function testGetEmailReturnsEmailString()
    {
        $em = new EmailAddress();
        $em->setEmail('user@email.com');
        $expected = 'user@email.com';
        $actual = $em->getEmail();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }
}
