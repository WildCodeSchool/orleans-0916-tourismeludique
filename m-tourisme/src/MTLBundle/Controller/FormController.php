<?php

namespace MTLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

use AdminBundle\Entity\actu;
use AdminBundle\Entity\Contact;



class FormController extends Controller
{
    /**
     * @route("/contact" name="email_post")
     */
    public function contactUserAction(Request $request)
    {
        // création d'un objet Contact
        $contact = new Contact();
//        $contact->setNom();
//        $contact->setPrenom();
//        $contact->setEntreprise();
//        $contact->setMail();
//        $contact->setMessage();

        // création du formBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $contact);
        // ajout des champs de l'entité que l'on veut au formulaire
        $formBuilder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('entreprise', TextType::class)
            ->add('email', TextType::class)
            ->add('message', TextareaType::class)
            ->add('envoyer', SubmitType::class)
//            ->getForm()
        ;
        // formulaire généré à partir du formBuilder
        $form = $formBuilder->getForm();

        if ($request->isMethod('POST')) {
            //lien requête -> formulaire
            $form->handleRequest($request);
            // vérification que les valeurs entrées sont correctes
            if ($form->isValid) {
                //enregistrement de l'objet dans la BDD si nécessaire
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($contact);
//                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Votre mail à bien été envoyé.');

                // redirection vers l'index
                return $this->redirectToRoute('index');
            }
        }
        // passer la méthode createView() du formulaire à la vue
        // pour qu'elle puisse afficher le formulaire
        return $this->render('MTLBundle:Default:emailPost.html.twig', array(
            'form' => $form->createView(),
        ));

//        if ($form->isSibmitted() && $form->isValid() ) {
//            $contact = $form->getData();
//        }
//
    }

//    /**
//     * @Route("/contacter")
//     */
//    public function ContactTestForm()
//    {
//        return $this->render('MTLBundle:Default:email.html.twig'
//        );
//    }
//}
//
//    /**
//     * @Route("/index/contact")
//     */
//    public function ContactAction()
//    {
//        return $this->render('MTLBundle:Default:email.html.twig'
//        );
//    }

//    /**
//     * @Route("/index/email")
//     */
//    public function MessageAction()
//    {
//        return $this->render('MTLBundle:Default:emailPost.html.twig'
//        );
//    }

}
