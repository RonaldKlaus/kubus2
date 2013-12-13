<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\PhdData;
use Kubus\BackendBundle\Form\PhdDataType;

/**
 * PhdData controller.
 *
 */
class PhdDataController extends Controller
{

    /**
     * Lists all PhdData entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:PhdData')->findAll();

        return $this->render('KubusBackendBundle:PhdData:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PhdData entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PhdData();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('phddata_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:PhdData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a PhdData entity.
    *
    * @param PhdData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PhdData $entity)
    {
        $form = $this->createForm(new PhdDataType(), $entity, array(
            'action' => $this->generateUrl('phddata_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PhdData entity.
     *
     */
    public function newAction()
    {
        $entity = new PhdData();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:PhdData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PhdData entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PhdData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhdData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:PhdData:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing PhdData entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PhdData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhdData entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:PhdData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PhdData entity.
    *
    * @param PhdData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PhdData $entity)
    {
        $form = $this->createForm(new PhdDataType(), $entity, array(
            'action' => $this->generateUrl('phddata_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PhdData entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:PhdData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhdData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('phddata_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:PhdData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PhdData entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:PhdData')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PhdData entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('phddata'));
    }

    /**
     * Creates a form to delete a PhdData entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('phddata_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
