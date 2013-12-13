<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\LessonDate;
use Kubus\BackendBundle\Form\LessonDateType;

/**
 * LessonDate controller.
 *
 */
class LessonDateController extends Controller
{

    /**
     * Lists all LessonDate entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:LessonDate')->findAll();

        return $this->render('KubusBackendBundle:LessonDate:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LessonDate entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LessonDate();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lessondate_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:LessonDate:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a LessonDate entity.
    *
    * @param LessonDate $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LessonDate $entity)
    {
        $form = $this->createForm(new LessonDateType(), $entity, array(
            'action' => $this->generateUrl('lessondate_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LessonDate entity.
     *
     */
    public function newAction()
    {
        $entity = new LessonDate();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:LessonDate:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LessonDate entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonDate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonDate entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonDate:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing LessonDate entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonDate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonDate entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonDate:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LessonDate entity.
    *
    * @param LessonDate $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LessonDate $entity)
    {
        $form = $this->createForm(new LessonDateType(), $entity, array(
            'action' => $this->generateUrl('lessondate_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LessonDate entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonDate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonDate entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lessondate_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:LessonDate:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LessonDate entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:LessonDate')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LessonDate entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lessondate'));
    }

    /**
     * Creates a form to delete a LessonDate entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lessondate_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
