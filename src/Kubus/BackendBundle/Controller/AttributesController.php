<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\Attributes;
use Kubus\BackendBundle\Form\AttributesType;

/**
 * Attributes controller.
 *
 */
class AttributesController extends Controller
{

    /**
     * Lists all Attributes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:Attributes')->findAll();

        return $this->render('KubusBackendBundle:Attributes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Attributes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Attributes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('attributes_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:Attributes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Attributes entity.
    *
    * @param Attributes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Attributes $entity)
    {
        $form = $this->createForm(new AttributesType(), $entity, array(
            'action' => $this->generateUrl('attributes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Attributes entity.
     *
     */
    public function newAction()
    {
        $entity = new Attributes();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:Attributes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Attributes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Attributes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attributes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:Attributes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Attributes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Attributes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attributes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:Attributes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Attributes entity.
    *
    * @param Attributes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Attributes $entity)
    {
        $form = $this->createForm(new AttributesType(), $entity, array(
            'action' => $this->generateUrl('attributes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Attributes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Attributes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attributes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('attributes_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:Attributes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Attributes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:Attributes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Attributes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('attributes'));
    }

    /**
     * Creates a form to delete a Attributes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attributes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
