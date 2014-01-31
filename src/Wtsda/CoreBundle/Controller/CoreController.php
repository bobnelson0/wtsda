<?php

namespace Wtsda\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    protected function _render($viewPath, $args = array())
    {
        //TODO: Sniff for device type
        $device = 'desktop';
        switch($device)
        {
            case 'moblie':  $suffix = 'moblie'; break;
            case null:
            case 'desktop': $suffix = ''; break;
            default:        $suffix = '';
        }

        return $this->render($viewPath . $suffix . '.html.twig', $args);
    }

    protected function getEM()
    {
        return $this->getDoctrine()->getManager();
    }

    protected function getRepo($entity)
    {
        return $this->getDoctrine()->getManager()->getRepository($entity);
    }

    protected function translate($message)
    {
        return $this->get('translator')->trans($message);
    }
}
