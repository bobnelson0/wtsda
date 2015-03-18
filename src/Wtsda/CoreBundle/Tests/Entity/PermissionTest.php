<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use \Wtsda\CoreBundle\Entity\Permission as Permission;
use \Wtsda\CoreBundle\Entity\Role as Role;
use \Wtsda\CoreBundle\Entity\User as User;
use \Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

class PermissionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorCreatesArrayCollections()
    {
        $perm = new Permission();
        $expected = 'Doctrine\Common\Collections\ArrayCollection';
        $this->assertInstanceOf($expected, $perm->getRoles());
        $this->assertInstanceOf($expected, $perm->getUsers());
    }

    public function testGetIdReturnsNullAfterConstruction()
    {
        $perm = new Permission();
        $expected = null;
        $actual = $perm->getId();

        $this->assertEquals($expected, $actual);
    }

    public function testSetResourceUpdatesResource()
    {
        $perm = new Permission();
        $expected = 'RESOURCE!';
        $perm->setResource($expected);
        $actual = $perm->getResource();

        $this->assertEquals($expected, $actual);
    }

    public function testSetResourceReturnsObject()
    {
        $perm = new Permission();
        $expected = $perm;
        $actual = $perm->setResource('RESOURCE!');

        $this->assertEquals($expected, $actual);
    }

    public function testGetResourceReturnsResourceString()
    {
        $perm = new Permission();
        $perm->setResource('RESOURCE!');
        $expected = 'RESOURCE!';
        $actual = $perm->getResource();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testSetDescriptionUpdatesDescription()
    {
        $perm = new Permission();
        $expected = 'DESC!';
        $perm->setDescription($expected);
        $actual = $perm->getDescription();

        $this->assertEquals($expected, $actual);
    }

    public function testSetDescriptionReturnsObject()
    {
        $perm = new Permission();
        $expected = $perm;
        $actual = $perm->setDescription('DESC!');

        $this->assertEquals($expected, $actual);
    }

    public function testGetDescriptionReturnsDescriptionString()
    {
        $perm = new Permission();
        $perm->setDescription('DESC!');
        $expected = 'DESC!';
        $actual = $perm->getDescription();

        $this->assertEquals($expected, $actual);
        $this->assertInternalType('string', $actual);
    }

    public function testAddRoleReturnsObject()
    {
        $perm = new Permission();
        $role = new Role();
        $expected = $perm;
        $actual = $perm->addRole($role);

        $this->assertEquals($expected, $actual);
    }

    public function testAddRoleAddsRoleToEmptyCollection()
    {
        $perm = new Permission();
        $role = new Role();
        $expected = new ArrayCollection(array($role));
        $actual = $perm->addRole($role)->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testAddRoleAddsMultipleRolesToEmptyCollectionWithChaining()
    {
        $perm = new Permission();
        $role1 = new Role();
        $role2 = new Role();
        $expected = new ArrayCollection(array($role1, $role2));
        $actual = $perm->addRole($role1)->addRole($role2)->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testAddRoleAddsRoleToNonEmptyCollection()
    {
        $perm = new Permission();
        $role1 = new Role();
        $role2 = new Role();
        $perm->addRole($role1);
        $expected = new ArrayCollection(array($role1, $role2));
        $actual = $perm->addRole($role2)->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveRoleReturnsObject()
    {
        $perm = new Permission();
        $role = new Role();
        $expected = $perm;
        $actual = $perm->removeRole($role);

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveRoleDeletesRoleFromSingleCollection()
    {
        $perm = new Permission();
        $role = new Role();
        $perm->addRole($role);
        $expected = new ArrayCollection(array());
        $actual = $perm->removeRole($role)->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveRoleDeletesRoleFromMultiCollection()
    {
        $perm = new Permission();
        $role1 = new Role();
        $role2 = new Role();
        $perm->addRole($role1)->addRole($role2);
        $expected = new ArrayCollection(array($role1));
        $actual = $perm->removeRole($role2)->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testGetRolesReturnsArrayCollection()
    {
        $perm = new Permission();
        $role1 = new Role();
        $role2 = new Role();
        $perm->addRole($role1)->addRole($role2);
        $expected = new ArrayCollection(array($role1, $role2));
        $actual = $perm->getRoles();

        $this->assertEquals($expected, $actual);
    }

    public function testAddUserReturnsObject()
    {
        $perm = new Permission();
        $user = new User();
        $expected = $perm;
        $actual = $perm->addUser($user);

        $this->assertEquals($expected, $actual);
    }

    public function testAddUserAddsUserToEmptyCollection()
    {
        $perm = new Permission();
        $user = new User();
        $expected = new ArrayCollection(array($user));
        $actual = $perm->addUser($user)->getUsers();

        $this->assertEquals($expected, $actual);
    }

    public function testAddUserAddsMultipleUsersToEmptyCollectionWithChaining()
    {
        $perm = new Permission();
        $user1 = new User();
        $user2 = new User();
        $expected = new ArrayCollection(array($user1, $user2));
        $actual = $perm->addUser($user1)->addUser($user2)->getUsers();

        $this->assertEquals($expected, $actual);
    }

    public function testAddUserAddsUserToNonEmptyCollection()
    {
        $perm = new Permission();
        $user1 = new User();
        $user2 = new User();
        $perm->addUser($user1);
        $expected = new ArrayCollection(array($user1, $user2));
        $actual = $perm->addUser($user2)->getUsers();

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveUserReturnsObject()
    {
        $perm = new Permission();
        $user = new User();
        $expected = $perm;
        $actual = $perm->removeUser($user);

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveUserDeletesUserFromSingleCollection()
    {
        $perm = new Permission();
        $user = new User();
        $perm->addUser($user);
        $expected = new ArrayCollection(array());
        $actual = $perm->removeUser($user)->getUsers();

        $this->assertEquals($expected, $actual);
    }

    public function testRemoveUserDeletesUserFromMultiCollection()
    {
        $perm = new Permission();
        $user1 = new User();
        $user2 = new User();
        $perm->addUser($user1)->addUser($user2);
        $expected = new ArrayCollection(array($user1));
        $actual = $perm->removeUser($user2)->getUsers();

        $this->assertEquals($expected, $actual);
    }

    public function testGetUserReturnsArrayCollection()
    {
        $perm = new Permission();
        $user1 = new User();
        $user2 = new User();
        $perm->addUser($user1)->addUser($user2);
        $expected = new ArrayCollection(array($user1, $user2));
        $actual = $perm->getUsers();

        $this->assertEquals($expected, $actual);
    }
}
