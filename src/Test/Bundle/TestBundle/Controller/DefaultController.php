<?php

namespace Test\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Default Controller
 * 
 * Basic controller for providing responses
 * 
 * @package Test\Bundle\TestBundle\Controller
 * @author Paul Saunders
 */
class DefaultController extends Controller
{
    /**
     * The index action
     * 
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('TestTestBundle:Default:index.html.twig');
    }
}
