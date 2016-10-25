<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use Symfony\Component\HttpFoundation\Request;

class actuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array('attr'=>array('label_class'=>'red')))
            ->add('contenu')
            ->add('date', 'date')
            ->add('image', FileType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\actu'
        ));
    }
}

class contactType extends AbstractType
{
    /**
     * @route("/contact" name="envoi_email")
     * @param
     */
    public function contactUserForm(Request $request)
    {
        // création d'un objet Contact
        $contact = new Contact();

//        $contact->setNom();
//        $contact->setPrenom();
//        $contact->setEntreprise();
//        $contact->setMail();
//        $contact->setMessage();

        // création du formBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createFormBuilder(actuType::class, $contact);

        // ajout des champs de l'entité que l'on veut au formulaire
        $formBuilder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('entreprise', TextType::class)
            ->add('mail', TextType::class)
            ->add('message', TextareaType::class)
            ->add('envoyer', SubmitType::class)
            ->getForm();

        // formulaire généré à partir du formBuilder
        $form = $formBuilder->getForm();

        // passer la méthode createView() du formulaire à la vue
        // pour qu'elle puisse afficher le formulaire
        return $this->render('AdminBundle:Default:emailPost.html.twig', array(
            'form' => $form->createView()
        ));


//        $formBuilder->handleRequest($request);

//        if ($form->isSibmitted() && $form->isValid() ) {
//            $contact = $form->getData();
//
//            return $this->redirectToRoute('index');
//        }
//
    }

    /**
     * @Route("/contacter")
     */
    public function ContactTestForm()
    {
        return $this->render('AdminBundle:Default:email.html.twig'
        );
    }
}
