<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use Wtsda\CoreBundle\Entity\Role;

class RoleTest extends \PHPUnit_Framework_TestCase
{
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

    public function testSetOrderUpdatesDescription()
    {
        $role = new Role();
        $expected = 1;
        $role->setOrder($expected);
        $actual = $role->getOrder();

        $this->assertEquals($expected, $actual);
    }

    public function testSetOrderReturnsObject()
    {
        $role = new Role();
        $expected = $role;
        $actual = $role->setOrder(1);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetOrderThrowsExceptionWhenOrderIsNotAnInteger()
    {
        $role = new Role();
        $role->setOrder('NotANumber');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetOrderThrowsExceptionWhenOrderIsAStringInteger()
    {
        $role = new Role();
        $role->setOrder('1');
    }
}
