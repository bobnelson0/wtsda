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


}
