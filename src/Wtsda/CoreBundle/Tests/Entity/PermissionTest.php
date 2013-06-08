<?php

namespace Wtsda\CoreBundle\Tests\Entity;

use Wtsda\CoreBundle\Entity\Permission;

class PermissionTest extends \PHPUnit_Framework_TestCase
{
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
}
