<?php

namespace MTLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use AdminBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;

use AdminBundle\Form\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="accueil")
     */
    public function listeActuIndexAction(Request $request)
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // envoi du mail

            return $this->redirectToRoute('accueil');
        }
        return $this->render('MTLBundle:Default:index.html.twig', array(
            'actus' => $actus,
            'form' => $form->createView(),
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

//    /**
//     * @Route("/index/contact")
//     */
//    public function ContactAction()
//    {
//// création d'un objet Contact
//        $contact = new Contact();
//        $contact->setNom($_POST);
//        $contact->setPrenom($_POST);
//        $contact->setEntreprise($_POST);
//        $contact->setEmail($_POST);
//        $contact->setMessage($_POST);
//
//        $form = $this->createFormBuilder($contact)
//        // création du formBuilder grace au service form factory
////        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $contact)
//            // ajout des champs de l'entité que l'on veut au formulaire
//            ->add('nom', TextType::class, array(
//                'required' => true, array(
//                    'attr' => array('placeholder' => 'Votre Nom *',
//                        'aria-label' => 'Votre Nom',
//                        'id' => 'Nom',
//                        'class' => 'form-control input-lg'
//                    )
//                )
//            ))
//            ->add('prenom', TextType::class, array(
//                'required' => true, array(
//                    'attr' => array('placeholder' => 'Votre Prénom *',
//                        'aria-label' => 'Votre Prénom',
//                        'id' => 'Prenom',
//                        'class' => 'form-control input-lg'
//                    )
//                )
//            ))
//            ->add('entreprise', TextType::class, array(
//                'attr' => array('placeholder' => 'Votre entreprise, société, organisme,...',
//                    'aria-label' => 'Votre raison sociale',
//                    'id' => 'Entreprise',
//                    'class' => 'form-control input-lg'
//                )
//            ))
//            ->add('email', TextType::class, array(
//                'required' => true, array(
//                    'attr' => array('placeholder' => 'Votre email *',
//                        'aria-label' => 'Votre email',
//                        'id' => 'Email',
//                        'class' => 'form-control input-lg'
//                    )
//                )
//            ))
//            ->add('message', TextareaType::class, array(
//                'required' => true, array(
//                    'attr' => array('lenght' => 10,
//                        'placeholder' => 'Votre message *',
//                        'aria-label' => 'Votre message',
//                        'id' => 'Message',
//                        'class' => 'form-control input-lg'
//                    )
//                )
//            ))
//            ->add('envoyer', SubmitType::class, array(
//                'attr' => array('label' => 'Envoyer',
//                    'class' => 'tn btn-warning catForm lien_submit'
//                )
//            ))
//            ->getForm();
//
//        return $this->render('MTLBundle:Default:emailPost.html.twig', array(
//            'form' => $form->createView(),
//        ));
//
////        if ($form->isSibmitted() && $form->isValid() ) {
////            $contact = $form->getData();
////        }
//    }
//

}
