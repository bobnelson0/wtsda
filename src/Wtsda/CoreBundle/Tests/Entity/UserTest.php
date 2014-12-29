<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use \Wtsda\CoreBundle\Entity\User;
use \Wtsda\CoreBundle\Entity\Role;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorCreatesArrayCollections()
    {
        $user = new User();
        $expected = 'Doctrine\Common\Collections\ArrayCollection';
        $this->assertInstanceOf($expected, $user->getPermissions());
    }

    public function testGetIdReturnsNullAfterConstruction()
    {
        $user = new User();
        $expected = null;
        $actual = $user->getId();

        $this->assertEquals($expected, $actual);
    }

    public function testSetUsernameUpdatesUsername()
    {
        $user = new User();
        $expected = 'user@email.com';
        $user->setUsername($expected);
        $actual = $user->getUsername();

        $this->assertEquals($expected, $actual);
    }

    public function testSetUsernameReturnsObject()
    {
        $user = new User();
        $expected = $user;
        $actual = $user->setUsername('user@email.com');

        $this->assertEquals($expected, $actual);
    }

    public function testGetUsernameReturnsUsernameString()
    {
        $user = new User();
        $user->setUsername('user@email.com');
        $expected = 'user@email.com';
        $actual = $user->getUsername();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testSetCreatedUpdatesCreated()
    {
        $user = new User();
        $expected = strtotime('1983-03-08 11:00 AM');
        $user->setCreated($expected);
        $actual = $user->getCreated();

        $this->assertEquals($expected, $actual);
    }

    public function testSetCreatedReturnsObject()
    {
        $user = new User();
        $expected = $user;
        $actual = $user->setCreated(strtotime('1983-03-08 11:00 AM'));

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetCreatedThrowsExceptionWhenCreatedIsNotAnInteger()
    {
        $user = new User();
        $user->setCreated('NotANumber');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetCreatedThrowsExceptionWhenCreatedIsAStringInteger()
    {
        $user = new User();
        $user->setCreated('1');
    }

    public function testGetCreatedReturnsCreatedInteger()
    {
        $user = new User();
        $user->setCreated(strtotime('1983-03-08 11:00 AM'));
        $expected = strtotime('1983-03-08 11:00 AM');
        $actual = $user->getCreated();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('integer', $actual);
    }

    public function testSetLastLoginUpdatesLastLogin()
    {
        $user = new User();
        $expected = strtotime('1983-03-08 11:00 AM');
        $user->setLastLogin($expected);
        $actual = $user->getLastLogin();

        $this->assertEquals($expected, $actual);
    }

    public function testSetLastLoginReturnsObject()
    {
        $user = new User();
        $expected = $user;
        $actual = $user->setLastLogin(strtotime('1983-03-08 11:00 AM'));

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetLastLoginThrowsExceptionWhenLastLoginIsNotAnInteger()
    {
        $user = new User();
        $user->setLastLogin('NotANumber');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetLastLoginThrowsExceptionWhenLastLoginIsAStringInteger()
    {
        $user = new User();
        $user->setLastLogin('1');
    }

    public function testGetLastLoginReturnsLastLoginInteger()
    {
        $user = new User();
        $user->setLastLogin(strtotime('1983-03-08 11:00 AM'));
        $expected = strtotime('1983-03-08 11:00 AM');
        $actual = $user->getLastLogin();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('integer', $actual);
    }

    public function testSetSaltUpdatesSaltWithEncryption()
    {
        $user = new User();
        $user->setUsername('user@gmail.com');
        $expected = sha1($user->getUsername());
        $user->setSalt();
        $actual = $user->getSalt();

        $this->assertEquals($expected, $actual);
    }

    public function testSetSaltReturnsObject()
    {
        $user = new User();
        $user->setUsername('user@gmail.com');
        $expected = $user;
        $actual = $user->setSalt();

        $this->assertEquals($expected, $actual);
    }

    public function testGetSaltReturnsSaltString()
    {
        $user = new User();
        $user->setUsername('user@gmail.com');
        $user->setSalt();
        $expected = '5a4cd0167fd2730dae4430fd5aaa4c79a89c18d4';
        $actual = $user->getSalt();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetSaltThrowsExceptionWhenUsernameIsNotSet()
    {
        $user = new User();
        $user->setSalt();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetSaltThrowsExceptionWhenUsernameIsNull()
    {
        $user = new User();
        $user->setUsername(null);
        $user->setSalt();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetSaltThrowsExceptionWhenUsernameIsEmpty()
    {
        $user = new User();
        $user->setUsername('');
        $user->setSalt();
    }
















    public function testSetRoleUpdatesRole()
    {
        $user = new User();
        $role = new Role();
        $expected = $role;
        $user->setRole($expected);
        $actual = $user->getRole();

        $this->assertEquals($expected, $actual);
    }

    public function testSetRoleReturnsObject()
    {
        $user = new User();
        $role = new Role();
        $expected = $user;
        $actual = $user->setRole($role);

        $this->assertEquals($expected, $actual);
    }

    public function testGetRoleReturnsRoleObject()
    {
        $user = new User();
        $role = new Role();
        $user->setRole($role);
        $expected = $role;
        $actual = $user->getRole();

        $this->assertEquals($expected, $actual);
        $this->assertInstanceOf('\Wtsda\CoreBundle\Entity\Role', $actual);
    }
}
