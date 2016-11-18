<?php

namespace MTLBundle\Controller;

use MTLBundle\MTLBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use AdminBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Swift_Mailer;
use Swift_Message;
use AdminBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="accueil")
     */
    public function listeActuIndexAction(Request $request)
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findby(array(), array('id'=>'DESC'));

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // create mail transport config
//            $transport = \Swift_MailTransport::newInstance('smtp.example.org', 25)
//                ->setUsername('username')
//                ->setPassword('password');

            if ($request->isMethod('POST')) {
                $request = Request::createFromGlobals();

                $nom = $form["nom"]->getData();
                $prenom = $form["prenom"]->getData();
                $entreprise = $form["entreprise"]->getData();
                $email = $form["email"]->getData();
                $message = $form["message"]->getData();
                $contact = $form->getData();


                // create the message
                $message = \Swift_Message::newInstance()
                    ->setSubject('Mail envoyé depuis votre site m-Tourisme Ludique')
                    ->setFrom(array('contact@mtourisme-ludique.fr' => 'Un visiteur'))
                    ->setTo(array('contact@mtourisme-ludique.fr' => 'm-Tourisme Ludique'))
                    ->setCharset('UTF-8')
                    ->setContentType('text/html')
                    ->setBody(
                        $this->renderView('AdminBundle:Default:emailPost.html.twig'
                            , array('form' => $form,
                                    'nom' => $nom,
                                    'prenom' => $prenom,
                                    'entreprise' => $entreprise,
                                    'email' => $email,
                                    'message' => $message,
                                    'contact' => $contact
                            )
                        ));

                // send mail
//            $mailer = \Swift_Mailer::newInstance($transport);
//            $mailer->send($message);
                $this->get('mailer')->send($message);

                $this->get('session')
                    ->getFlashBag()
                    ->add('success', 'Votre message à bien été envoyé. Nous vous ferons un retour dans les plus brefs délais. Merci!');
            }

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
            ->findby(array(), array('id'=>'DESC'));
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
        return $this->render('MTLBundle:Default:oneActu.html.twig', array(
            'actu' => $actu,
        ));
    }

}
