<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends CoreController
{
    public function indexAction()
    {
        $permissions = $this->getRepo('WtsdaCoreBundle:Permission')
            ->findAllOrderedByResource();

        $output = '<pre>' . print_r($permissions, true) . '</pre>';
        //return new Response('Permissions:<br />' . $output);
        return $this->_render('WtsdaAppBundle:Default:index');
    }
}
