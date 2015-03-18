<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use Wtsda\CoreBundle\Entity\Role as Role;
use \Wtsda\CoreBundle\Entity\Permission as Permission;
use \Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

class RoleTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorCreatesArrayCollections()
    {
        $role = new Role();
        $expected = 'Doctrine\Common\Collections\ArrayCollection';
        $this->assertInstanceOf($expected, $role->getUsers());
        $this->assertInstanceOf($expected, $role->getPermissions());
    }

    public function testGetIdReturnsNullAfterConstruction()
    {
        $role = new Role();
        $expected = null;
        $actual = $role->getId();

        $this->assertEquals($expected, $actual);
    }

    public function testSetNameUpdatesName()
    {
        $role = new Role();
        $expected = 'Role Name';
        $role->setName($expected);
        $actual = $role->getName();

        $this->assertEquals($expected, $actual);
    }

    public function testSetNameReturnsObject()
    {
        $role = new Role();
        $expected = $role;
        $actual = $role->setName('Role Name');

        $this->assertEquals($expected, $actual);
    }

    public function testGetNameReturnsNameString()
    {
        $role = new Role();
        $role->setName('Role Name');
        $expected = 'Role Name';
        $actual = $role->getName();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testSetDescriptionUpdatesDescription()
    {
        $role = new Role();
        $expected = 'Role Desc';
        $role->setDescription($expected);
        $actual = $role->getDescription();

        $this->assertEquals($expected, $actual);
    }

    public function testSetDescriptionReturnsObject()
    {
        $role = new Role();
        $expected = $role;
        $actual = $role->setDescription('Role Desc');

        $this->assertEquals($expected, $actual);
    }

    public function testGetDescriptionReturnsDescriptionString()
    {
        $role = new Role();
        $role->setDescription('Role Desc');
        $expected = 'Role Desc';
        $actual = $role->getDescription();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testSetOrdUpdatesOrd()
    {
        $role = new Role();
        $expected = 1;
        $role->setOrd($expected);
        $actual = $role->getOrd();

        $this->assertEquals($expected, $actual);
    }

    public function testSetOrdReturnsObject()
    {
        $role = new Role();
        $expected = $role;
        $actual = $role->setOrd(1);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetOrdThrowsExceptionWhenOrdIsNotAnInteger()
    {
        $role = new Role();
        $role->setOrd('NotANumber');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetOrdThrowsExceptionWhenOrdIsAStringInteger()
    {
        $role = new Role();
        $role->setOrd('1');
    }

    public function testGetOrdReturnsOrdInteger()
    {
        $role = new Role();
        $role->setOrd(1);
        $expected = 1;
        $actual = $role->getOrd();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('integer', $actual);
    }

    public function testAddPermissionReturnsObject()
    {
        $role = new Role();
        $perm = new Permission();
        $expected = $role;
        $actual = $role->addPermission($perm);

        $this->assertEquals($expected, $actual);
    }

    public function testAddPermissionAddsPermissionToEmptyCollection()
    {
        $role = new Role();
        $perm = new Permission();
        $expected = new ArrayCollection(array($perm));
        $actual = $role->addPermission($perm)->getPermissions();

        $this->assertEquals($expected, $actual);
    }

    public function testAddPermissionAddsMultiplePermissionsToEmptyCollectionWithChaining()
    {
        $role = new Role();
        $perm1 = new Permission();
        $perm2 = new Permission();
        $expected = new ArrayCollection(array($perm1, $perm2));
        $actual = $role->addPermission($perm1)->addPermission($perm2)->getPermissions();

        $this->assertEquals($expected, $actual);
    }

    public function testAddPermissionAddsPermissionToNonEmptyCollection()
    {
        $role = new Role();
        $perm1 = new Permission();
        $perm2 = new Permission();
        $role->addPermission($perm1);
        $expected = new ArrayCollection(array($perm1, $perm2));
        $actual = $role->addPermission($perm2)->getPermissions();

        $this->assertEquals($expected, $actual);
    }

    public function testRemovePermissionReturnsObject()
    {
        $role = new Role();
        $perm = new Permission();
        $expected = $role;
        $actual = $role->removePermission($perm);

        $this->assertEquals($expected, $actual);
    }

    public function testRemovePermissionDeletesPermissionFromSingleCollection()
    {
        $role = new Role();
        $perm = new Permission();
        $role->addPermission($perm);
        $expected = new ArrayCollection(array());
        $actual = $role->removePermission($perm)->getPermissions();

        $this->assertEquals($expected, $actual);
    }

    public function testRemovePermissionDeletesPermissionFromMultiCollection()
    {
        $role = new Role();
        $perm1 = new Permission();
        $perm2 = new Permission();
        $role->addPermission($perm1)->addPermission($perm2);
        $expected = new ArrayCollection(array($perm1));
        $actual = $role->removePermission($perm2)->getPermissions();

        $this->assertEquals($expected, $actual);
    }

    public function testGetPermissionsReturnsArrayCollection()
    {
        $role = new Role();
        $perm1 = new Permission();
        $perm2 = new Permission();
        $role->addPermission($perm1)->addPermission($perm2);
        $expected = new ArrayCollection(array($perm1, $perm2));
        $actual = $role->getPermissions();

        $this->assertEquals($expected, $actual);
    }
}
