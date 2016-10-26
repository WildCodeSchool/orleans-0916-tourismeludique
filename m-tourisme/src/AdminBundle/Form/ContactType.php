<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AdminBundle\Entity\actu;
use Symfony\Component\HttpFoundation\Request;

class ContactType extends AbstractType
{
/**
* @param Request $resquest
* @return
* @internal param FormBuilderInterface $builder
* @internal param array $options
*/

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('attr'=>array('placeholder'=>'Votre Nom *')))
            ->add('prenom', TextType::class, array('attr'=>array('placeholder'=>'Votre Prénom *')))
            ->add('entreprise', TextType::class, array('attr'=>array('placeholder'=>'Votre raison sociale')))
            ->add('email', EmailType::class, array('attr'=>array('placeholder'=>'Votre email (ex: durantjerome@mail.com) *')))
            ->add('message', TextareaType::class, array('attr'=>array('placeholder'=>'message')))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'AdminBundle\Entity\Contact'
    ));
}

}
