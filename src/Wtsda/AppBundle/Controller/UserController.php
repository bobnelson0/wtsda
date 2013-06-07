<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;

class UserController extends CoreController
{
    public function loginAction()
    {
        return $this->render('WtsdaAppBundle:User:login.html.twig');
    }

}
