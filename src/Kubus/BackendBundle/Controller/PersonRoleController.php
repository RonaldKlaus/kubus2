<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\PersonRole;
use Kubus\BackendBundle\Form\PersonRoleType;

/**
 * PersonRole controller.
 *
 */
class PersonRoleController extends Controller
{

    /**
     * Lists all PersonRole entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:PersonRole')->findAll();

        return $this->render('KubusBackendBundle:PersonRole:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PersonRole entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PersonRole();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('personrole_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:PersonRole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a PersonRole entity.
    *
    * @param PersonRole $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PersonRole $entity)
    {
        $form = $this->createForm(new PersonRoleType(), $entity, array(
            'action' => $this->generateUrl('personrole_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PersonRole entity.
     *
     */
    public function newAction()
    {
        $entity = new PersonRole();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:PersonRole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PersonRole entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PersonRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonRole entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:PersonRole:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing PersonRole entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PersonRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonRole entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:PersonRole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PersonRole entity.
    *
    * @param PersonRole $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PersonRole $entity)
    {
        $form = $this->createForm(new PersonRoleType(), $entity, array(
            'action' => $this->generateUrl('personrole_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PersonRole entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PersonRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonRole entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('personrole_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:PersonRole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PersonRole entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:PersonRole')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PersonRole entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('personrole'));
    }

    /**
     * Creates a form to delete a PersonRole entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personrole_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
