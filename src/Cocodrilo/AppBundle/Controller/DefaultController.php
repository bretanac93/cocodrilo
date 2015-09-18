<?php

namespace Cocodrilo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $slogan1 = $em->find("AppBundle:Slogan" , 1);
        $slogan2 = $em->find("AppBundle:Slogan" , 2);
        $slogan3 = $em->find("AppBundle:Slogan" , 3);
        $slogan4 = $em->find("AppBundle:Slogan" , 4);
        $slogan5 = $em->find("AppBundle:Slogan" , 5);


        return $this->render('AppBundle:Default:index.html.twig',array(
            'slogan1'=>$slogan1,
            'slogan2'=>$slogan2,
            'slogan3'=>$slogan3,
            'slogan4'=>$slogan4,
            'slogan5'=>$slogan5
        ));
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
