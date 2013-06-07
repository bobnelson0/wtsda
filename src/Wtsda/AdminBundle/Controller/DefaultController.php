<?php

namespace Wtsda\AdminBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;

class DefaultController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAdminBundle:Default:index');
    }
}
