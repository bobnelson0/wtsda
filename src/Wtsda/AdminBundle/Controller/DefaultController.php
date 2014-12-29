<?php

namespace Wtsda\AdminBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Wtsda\CoreBundle\Entity\Permission;
use Wtsda\CoreBundle\Entity\Role;

class DefaultController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAdminBundle:Default:index');
    }

    public function dashboardAction()
    {
        return $this->_render('WtsdaAdminBundle:Default:dashboard');
    }

    public function testAction()
    {
        $permission = new Permission();
        $permission->setResource('/');
        $permission->setDescription('This is the root home page. Everyone has access.');

        $role = new Role();
        $role->setName('role_guest');
        $role->setDescription('Guest role. Has basic permissions. Nothing admin related');
        $role->setOrd(1);

        $permission->addRole($role);
        $role->addPermission($permission);

        $em = $this->getEM();
        $em->persist($permission);
        $em->persist($role);
        $em->flush();

        $role = $this->getRepo('WtsdaCoreBundle:Role')->find(1);

        $permissions = $role->getPermissions();

        $output = $permissions[0]->getDescription();

        return $this->_render('WtsdaAdminBundle:Default:test', array('output' => $output));
    }
}
