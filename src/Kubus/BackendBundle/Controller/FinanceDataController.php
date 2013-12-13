<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\FinanceData;
use Kubus\BackendBundle\Form\FinanceDataType;

/**
 * FinanceData controller.
 *
 */
class FinanceDataController extends Controller
{

    /**
     * Lists all FinanceData entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:FinanceData')->findAll();

        return $this->render('KubusBackendBundle:FinanceData:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FinanceData entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FinanceData();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('financedata_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:FinanceData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a FinanceData entity.
    *
    * @param FinanceData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(FinanceData $entity)
    {
        $form = $this->createForm(new FinanceDataType(), $entity, array(
            'action' => $this->generateUrl('financedata_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FinanceData entity.
     *
     */
    public function newAction()
    {
        $entity = new FinanceData();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:FinanceData:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FinanceData entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:FinanceData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FinanceData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:FinanceData:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing FinanceData entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:FinanceData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FinanceData entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:FinanceData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FinanceData entity.
    *
    * @param FinanceData $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FinanceData $entity)
    {
        $form = $this->createForm(new FinanceDataType(), $entity, array(
            'action' => $this->generateUrl('financedata_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FinanceData entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:FinanceData')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FinanceData entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('financedata_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:FinanceData:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FinanceData entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:FinanceData')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FinanceData entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('financedata'));
    }

    /**
     * Creates a form to delete a FinanceData entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('financedata_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
