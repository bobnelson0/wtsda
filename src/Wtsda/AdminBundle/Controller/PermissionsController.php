<?php

namespace Wtsda\AdminBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Wtsda\CoreBundle\Entity\Permission;

class PermissionsController extends CoreController
{
    public function indexAction()
    {
        $permission = new Permission();
        $permission = $this->getRepo('WtsdaCoreBundle:Permission')->find(1);
        $permission = $permission->getResource();
        return $this->_render('WtsdaAdminBundle:Permissions:index', array('output' => $permission));
    }

    public function addAction()
    {
        return $this->_render('WtsdaAdminBundle:Permissions:add', array());
    }

/*    public function editAction()
    {
        return $this->getJsonResponse(array(
            'data' => 123
        ));
    }

    public function deleteAction()
    {
        return $this->getJsonResponse(array(
            'data' => 123
        ));
    }*/
}
