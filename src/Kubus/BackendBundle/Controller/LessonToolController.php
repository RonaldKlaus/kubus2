<?php

namespace Kubus\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Kubus\BackendBundle\Entity\LessonTool;
use Kubus\BackendBundle\Form\LessonToolType;

/**
 * LessonTool controller.
 *
 */
class LessonToolController extends Controller
{

    /**
     * Lists all LessonTool entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KubusBackendBundle:LessonTool')->findAll();

        return $this->render('KubusBackendBundle:LessonTool:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LessonTool entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LessonTool();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lessontool_show', array('id' => $entity->getId())));
        }

        return $this->render('KubusBackendBundle:LessonTool:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a LessonTool entity.
    *
    * @param LessonTool $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LessonTool $entity)
    {
        $form = $this->createForm(new LessonToolType(), $entity, array(
            'action' => $this->generateUrl('lessontool_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LessonTool entity.
     *
     */
    public function newAction()
    {
        $entity = new LessonTool();
        $form   = $this->createCreateForm($entity);

        return $this->render('KubusBackendBundle:LessonTool:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LessonTool entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonTool')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonTool entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonTool:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing LessonTool entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonTool')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonTool entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KubusBackendBundle:LessonTool:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LessonTool entity.
    *
    * @param LessonTool $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LessonTool $entity)
    {
        $form = $this->createForm(new LessonToolType(), $entity, array(
            'action' => $this->generateUrl('lessontool_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LessonTool entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KubusBackendBundle:LessonTool')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LessonTool entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lessontool_edit', array('id' => $id)));
        }

        return $this->render('KubusBackendBundle:LessonTool:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LessonTool entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KubusBackendBundle:LessonTool')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LessonTool entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lessontool'));
    }

    /**
     * Creates a form to delete a LessonTool entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lessontool_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
