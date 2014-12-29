<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use \Wtsda\CoreBundle\Entity\Password;

class PasswordTest extends \PHPUnit_Framework_TestCase
{
    public function testGetIdReturnsNullAfterConstruction()
    {
        $password = new Password();
        $expected = null;
        $actual = $password->getId();

        $this->assertEquals($expected, $actual);
    }

    public function testSetStringUpdatesString()
    {
        $password = new Password();
        $expected = 'PASSWORD';
        $password->setString($expected);
        $actual = $password->getString();

        $this->assertEquals($expected, $actual);
    }

    public function testSetStringReturnsObject()
    {
        $password = new Password();
        $expected = $password;
        $actual = $password->setString('PASSWORD');

        $this->assertEquals($expected, $actual);
    }

    public function testGetStringReturnsStringString()
    {
        $password = new Password();
        $password->setString('RESOURCE!');
        $expected = 'RESOURCE!';
        $actual = $password->getString();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }
}
