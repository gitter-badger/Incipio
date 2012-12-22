<?php

namespace mgate\PersonneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use mgate\PersonneBundle\Form\Type\SexeType as SexeType;


class UserType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
	    $builder
                ->add('prenom')
                ->add('nom')
                ->add('poste')
                ->add('sexe', new SexeType())
                ->add('username')
                ->add('password', 'password')
                ->add('email', 'email');
            
    }

    public function getName()
    {
        return 'alex_suivibundle_usertype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'mgate\PersonneBundle\Entity\User',
        );
    }
}

