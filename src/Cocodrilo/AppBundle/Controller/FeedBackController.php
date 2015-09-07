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
     * Creates a new FeedBack entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FeedBack();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('feedback_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:FeedBack:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FeedBack entity.
     *
     * @param FeedBack $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FeedBack $entity)
    {
        $form = $this->createForm(new FeedBackType(), $entity, array(
            'action' => $this->generateUrl('feedback_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FeedBack entity.
     *
     */
    public function newAction()
    {
        $entity = new FeedBack();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:FeedBack:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
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

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:FeedBack:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FeedBack entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:FeedBack')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeedBack entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:FeedBack:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FeedBack entity.
    *
    * @param FeedBack $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FeedBack $entity)
    {
        $form = $this->createForm(new FeedBackType(), $entity, array(
            'action' => $this->generateUrl('feedback_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FeedBack entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:FeedBack')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FeedBack entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('feedback_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:FeedBack:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FeedBack entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:FeedBack')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FeedBack entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('feedback'));
    }

    /**
     * Creates a form to delete a FeedBack entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feedback_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
