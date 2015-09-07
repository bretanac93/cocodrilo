<?php

namespace Cocodrilo\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cocodrilo\AppBundle\Entity\FeedBack;
use Cocodrilo\AppBundle\Form\FeedBackType;

/**
 * FeedBack controller.
 *
 */
class FeedBackController extends Controller
{
    /**
     * Lists all FeedBack entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:FeedBack')->findAll();

        return $this->render('AppBundle:FeedBack:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    /**
     * Finds and displays a FeedBack entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:FeedBack')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeedBack entity.');
        }

        return $this->render('AppBundle:FeedBack:show.html.twig', array(
            'entity'      => $entity,

        ));
    }

}
