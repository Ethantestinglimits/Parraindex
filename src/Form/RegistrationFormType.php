<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'attr' => array(
                    'placeholder' => 'Les IUTs dominent le monde.'
                )
            ))
            ->add('email', null, array(
                'attr' => array(
                    'placeholder' => 'potter@hogwarts.edu'
                )
            ))
            ->add('firstName', null, array(
                'attr' => array(
                    'placeholder' => ' '
                )
            ))
            ->add('lastName', null, array(
                'attr' => array(
                    'placeholder' => ' '
                )
            ))
            ->add('birthDate',DateType::Class, array(
                'data' => new \DateTime('10/09/2001'),
                'choice_translation_domain' => false,
                'widget' => 'single_text',
                'years' => range(1964, date('Y')+1),
            ))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr' => ['class' => 'checkbox'],
                'row_attr' => ['class' => 'checkbox-no-wrap'],
                'constraints' => [
                    new IsTrue([
                        'message' => "Accepter les conditions d'utilisations.",
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','placeholder' => 'Les Infos dominent les IUTs'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
