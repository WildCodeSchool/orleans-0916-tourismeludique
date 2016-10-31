<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
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
     * List all actu entities.
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
     * Create a new actu entity.
     *
     * @Route("/new", name="actu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $actu = new actu();
        $actu->setDate(new \DateTime('now'));
        $form = $this->createForm('AdminBundle\Form\actuType', $actu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

           // $actu = $form->getData();
            $file = $actu->getImage();
            if (!$file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $actu->setImage($fileName);

                $em = $this->getDoctrine()->getManager();
                $em->persist($actu);
                $em->flush();

                return $this->redirectToRoute('actu_show', array('id' => $actu->getId()));

            } else {
               // creation d'un message flash d'erreur (pb d'upload (verifiez la taille))
                echo "attention danger";

                // affichage du message d'erreur en retournant sur la page de création de news
                return $this->redirectToRoute('actu_new', array('id' => $actu->getId()));

            }

            return $this->redirectToRoute('actu_show', array('id' => $actu->getId()));
        }

        return $this->render('actu/new.html.twig', array(
            'actu' => $actu,
            'form' => $form->createView(),
        ));

    }

    /**
     * Finds and displays an actu entity.
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
        $actu->setImage(
            new File($this->getParameter('upload_directory').'/'.$actu->getImage())
        );

        $deleteForm = $this->createDeleteForm($actu);
        $editForm = $this->createForm('AdminBundle\Form\actuType', $actu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $file = $actu->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('upload_directory'),
                $fileName
            );
            $actu->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($actu);
            $em->flush();

            return $this->redirectToRoute('actu_show', array('id' => $actu->getId()));
        }

        return $this->render('actu/edit.html.twig', array(
            'actu' => $actu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Delete an actu entity.
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
     * Create a form to delete a actu entity.
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
