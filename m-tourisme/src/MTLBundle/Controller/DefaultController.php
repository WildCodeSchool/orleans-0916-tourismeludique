<?php

namespace MTLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */

    public function listeActuIndexAction()
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        return $this->render('MTLBundle:Default:index.html.twig', array(
            'actus' => $actus,
        ));
    }

    /**
     * @Route("/listeactu", name="liste_actu")
     */
    public function listeActuPageAction()
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        return $this->render('MTLBundle:Default:listeActu.html.twig', array(
            'actus' => $actus,
        ));
    }


    /**
     * Finds and displays an actu entity.
     *
     * @Route("/actushow/{id}", name="afficher_actu")
     * @Method("GET")
     */
    public function showActuAction(actu $actu)
    {
//        $oneactu = $this->getDoctrine()
//            ->getRepository('AdminBundle:actu')
//            ->findOneById($id);

        return $this->render('MTLBundle:Default:oneActu.html.twig', array(
            'actu' => $actu,
        ));
    }

    /**
     * @Route("/index")
     * @Method({"GET", "POST"})
     */
    public function ActuAction()
    {
        $actu = new actu();
        $file = $actu->getImage();
        $file->move(
            $this->getParameter('upload_directory'),
            $fileName
        );
        $actu->setImage($fileName);

      //  $em = $this->getDoctrine()->getManager();
       // $em->persist($actu);
       // $em->flush();

        return $this->redirectToRoute('listeactu', array('id' => $actu->getId()));

        return $this->render('actu/new.html.twig', array(
            'actu' => $actu
        ));

    }

}
