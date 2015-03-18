<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Symfony\Component\HttpFoundation\Response;

class ScholarshipController extends CoreController
{
    public function indexAction()
    {
        return $this->_render('WtsdaAppBundle:Scholarship:index');
    }
}
