<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\ScienceDomain;
use Kubus\BackendBundle\Form\ScienceDomainType;

/**
 * ScienceDomain controller.
 *
 */
class ScienceDomainController extends Controller
{

    /**
     * Lists all ScienceDomain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:ScienceDomain')->findAll();

        return $this->render('KubusBackendBundle:ScienceDomain:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ScienceDomain entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ScienceDomain();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sciencedomain_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:ScienceDomain:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a ScienceDomain entity.
    *
    * @param ScienceDomain $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ScienceDomain $entity)
    {
        $form = $this->createForm(new ScienceDomainType(), $entity, array(
            'action' => $this->generateUrl('sciencedomain_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ScienceDomain entity.
     *
     */
    public function newAction()
    {
        $entity = new ScienceDomain();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:ScienceDomain:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ScienceDomain entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ScienceDomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScienceDomain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ScienceDomain:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ScienceDomain entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ScienceDomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScienceDomain entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:ScienceDomain:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ScienceDomain entity.
    *
    * @param ScienceDomain $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ScienceDomain $entity)
    {
        $form = $this->createForm(new ScienceDomainType(), $entity, array(
            'action' => $this->generateUrl('sciencedomain_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ScienceDomain entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:ScienceDomain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScienceDomain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sciencedomain_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:ScienceDomain:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ScienceDomain entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:ScienceDomain')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ScienceDomain entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sciencedomain'));
    }

    /**
     * Creates a form to delete a ScienceDomain entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sciencedomain_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
