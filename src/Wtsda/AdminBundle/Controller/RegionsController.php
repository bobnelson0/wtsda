<?php

namespace Wtsda\AdminBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Wtsda\CoreBundle\Entity\Region;

class RegionsController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAdminBundle:Regions:index');
    }

    public function addAction()
    {
        return $this->_render('WtsdaAdminBundle:Regions:add');
    }

}
