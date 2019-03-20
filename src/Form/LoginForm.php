<?php

namespace App\Form;

use App\Entity\Authenticator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email'
                ]
            ])
            ->add('fullname', PasswordType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Fullname'
                ]
            ]);

    }
        public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Authenticator::class,
        ]);
    }
}