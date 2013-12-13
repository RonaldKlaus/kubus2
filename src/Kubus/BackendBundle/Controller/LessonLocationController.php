<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\LessonLocation;
use Kubus\BackendBundle\Form\LessonLocationType;

/**
 * LessonLocation controller.
 *
 */
class LessonLocationController extends Controller
{

    /**
     * Lists all LessonLocation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:LessonLocation')->findAll();

        return $this->render('KubusBackendBundle:LessonLocation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LessonLocation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LessonLocation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lessonlocation_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:LessonLocation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a LessonLocation entity.
    *
    * @param LessonLocation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LessonLocation $entity)
    {
        $form = $this->createForm(new LessonLocationType(), $entity, array(
            'action' => $this->generateUrl('lessonlocation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LessonLocation entity.
     *
     */
    public function newAction()
    {
        $entity = new LessonLocation();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:LessonLocation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LessonLocation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonLocation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonLocation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonLocation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing LessonLocation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonLocation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonLocation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonLocation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LessonLocation entity.
    *
    * @param LessonLocation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LessonLocation $entity)
    {
        $form = $this->createForm(new LessonLocationType(), $entity, array(
            'action' => $this->generateUrl('lessonlocation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LessonLocation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonLocation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonLocation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lessonlocation_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:LessonLocation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LessonLocation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:LessonLocation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LessonLocation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lessonlocation'));
    }

    /**
     * Creates a form to delete a LessonLocation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lessonlocation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
