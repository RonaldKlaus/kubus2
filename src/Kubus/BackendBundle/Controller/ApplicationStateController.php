<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\ApplicationState;
use Kubus\BackendBundle\Form\ApplicationStateType;

/**
 * ApplicationState controller.
 *
 */
class ApplicationStateController extends Controller
{

    /**
     * Lists all ApplicationState entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:ApplicationState')->findAll();

        return $this->render('KubusBackendBundle:ApplicationState:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ApplicationState entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ApplicationState();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('applicationstate_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:ApplicationState:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a ApplicationState entity.
    *
    * @param ApplicationState $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ApplicationState $entity)
    {
        $form = $this->createForm(new ApplicationStateType(), $entity, array(
            'action' => $this->generateUrl('applicationstate_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ApplicationState entity.
     *
     */
    public function newAction()
    {
        $entity = new ApplicationState();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:ApplicationState:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ApplicationState entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ApplicationState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationState entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ApplicationState:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ApplicationState entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ApplicationState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationState entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ApplicationState:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ApplicationState entity.
    *
    * @param ApplicationState $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ApplicationState $entity)
    {
        $form = $this->createForm(new ApplicationStateType(), $entity, array(
            'action' => $this->generateUrl('applicationstate_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ApplicationState entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ApplicationState')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationState entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('applicationstate_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:ApplicationState:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ApplicationState entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:ApplicationState')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ApplicationState entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('applicationstate'));
    }

    /**
     * Creates a form to delete a ApplicationState entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('applicationstate_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
