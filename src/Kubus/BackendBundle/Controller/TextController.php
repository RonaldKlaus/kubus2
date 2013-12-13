<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\Text;
use Kubus\BackendBundle\Form\TextType;

/**
 * Text controller.
 *
 */
class TextController extends Controller
{

    /**
     * Lists all Text entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:Text')->findAll();

        return $this->render('KubusBackendBundle:Text:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Text entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Text();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('text_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:Text:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Text entity.
    *
    * @param Text $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Text $entity)
    {
        $form = $this->createForm(new TextType(), $entity, array(
            'action' => $this->generateUrl('text_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Text entity.
     *
     */
    public function newAction()
    {
        $entity = new Text();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:Text:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Text entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Text')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Text entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:Text:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Text entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Text')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Text entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:Text:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Text entity.
    *
    * @param Text $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Text $entity)
    {
        $form = $this->createForm(new TextType(), $entity, array(
            'action' => $this->generateUrl('text_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Text entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:Text')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Text entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('text_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:Text:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Text entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:Text')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Text entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('text'));
    }

    /**
     * Creates a form to delete a Text entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('text_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
