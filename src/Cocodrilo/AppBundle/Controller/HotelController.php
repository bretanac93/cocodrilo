<?php

namespace Cocodrilo\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cocodrilo\AppBundle\Entity\Hotel;
use Cocodrilo\AppBundle\Form\HotelType;

/**
 * Hotel controller.
 *
 */
class HotelController extends Controller
{

    /**
     * Lists all Hotel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Hotel')->findAll();

        return $this->render('AppBundle:Hotel:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Hotel entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Hotel')->find($id);
        $feedBacks = $em->getRepository('AppBundle:FeedBack')->findBy(array(
            'hotels'=>$entity
        ));



        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotel entity.');
        }

        return $this->render('AppBundle:Hotel:show.html.twig', array(
            'entity'      => $entity,
            'feedbacks'=>$feedBacks
        ));
    }


}
