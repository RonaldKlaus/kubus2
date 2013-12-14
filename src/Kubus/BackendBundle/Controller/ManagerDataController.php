<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\ManagerData;
use Kubus\BackendBundle\Form\ManagerDataType;

/**
 * ManagerData controller.
 *
 */
class ManagerDataController extends Controller
{

    /**
     * Lists all ManagerData entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:ManagerData')->findAll();

        return $this->render('KubusBackendBundle:ManagerData:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ManagerData entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ManagerData();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('managerdata_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:ManagerData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a ManagerData entity.
    *
    * @param ManagerData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ManagerData $entity)
    {
        $form = $this->createForm(new ManagerDataType(), $entity, array(
            'action' => $this->generateUrl('managerdata_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ManagerData entity.
     *
     */
    public function newAction()
    {
        $entity = new ManagerData();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:ManagerData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ManagerData entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ManagerData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ManagerData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ManagerData:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ManagerData entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ManagerData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ManagerData entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ManagerData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ManagerData entity.
    *
    * @param ManagerData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ManagerData $entity)
    {
        $form = $this->createForm(new ManagerDataType(), $entity, array(
            'action' => $this->generateUrl('managerdata_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ManagerData entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ManagerData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ManagerData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('managerdata_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:ManagerData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ManagerData entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:ManagerData')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ManagerData entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('managerdata'));
    }

    /**
     * Creates a form to delete a ManagerData entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('managerdata_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
