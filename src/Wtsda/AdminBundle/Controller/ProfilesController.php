<?php

namespace Wtsda\AdminBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Wtsda\CoreBundle\Entity\Profile;

class ProfilesController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAdminBundle:Profiles:index');
    }

    public function addAction()
    {
        return $this->_render('WtsdaAdminBundle:Profiles:add');
    }

}
