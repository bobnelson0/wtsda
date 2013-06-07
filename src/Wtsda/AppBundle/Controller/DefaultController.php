<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;

class DefaultController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAppBundle:Default:index');
    }
}
