<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\actu;
use AdminBundle\Form\actuType;

/**
 * actu controller.
 *
 * @Route("/actu")
 */
class actuController extends Controller
{
    /**
     * Lists all actu entities.
     *
     * @Route("/", name="actu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actus = $em->getRepository('AdminBundle:actu')->findAll();

        return $this->render('actu/index.html.twig', array(
            'actus' => $actus,
        ));
    }

    /**
     * Creates a new actu entity.
     *
     * @Route("/new", name="actu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $actu = new actu();
        $form = $this->createForm('AdminBundle\Form\actuType', $actu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actu);
            $em->flush();

            return $this->redirectToRoute('actu_show', array('id' => $actu->getId()));
        }

        return $this->render('actu/new.html.twig', array(
            'actu' => $actu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a actu entity.
     *
     * @Route("/{id}", name="actu_show")
     * @Method("GET")
     */
    public function showAction(actu $actu)
    {
        $deleteForm = $this->createDeleteForm($actu);

        return $this->render('actu/show.html.twig', array(
            'actu' => $actu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing actu entity.
     *
     * @Route("/{id}/edit", name="actu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, actu $actu)
    {
        $deleteForm = $this->createDeleteForm($actu);
        $editForm = $this->createForm('AdminBundle\Form\actuType', $actu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actu);
            $em->flush();

            return $this->redirectToRoute('actu_edit', array('id' => $actu->getId()));
        }

        return $this->render('actu/edit.html.twig', array(
            'actu' => $actu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a actu entity.
     *
     * @Route("/{id}", name="actu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, actu $actu)
    {
        $form = $this->createDeleteForm($actu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actu);
            $em->flush();
        }

        return $this->redirectToRoute('actu_index');
    }

    /**
     * Creates a form to delete a actu entity.
     *
     * @param actu $actu The actu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(actu $actu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actu_delete', array('id' => $actu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
