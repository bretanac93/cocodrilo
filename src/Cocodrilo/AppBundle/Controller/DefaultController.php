<?php

namespace Cocodrilo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('AppBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('AppBundle:Default:contact.html.twig');
    }

    public function servicesAction()
    {
        return $this->render('AppBundle:Default:services.html.twig');
    }

    public function moreInfoAction()
    {
        return $this->render('AppBundle:Default:more_info.html.twig');
    }
}
