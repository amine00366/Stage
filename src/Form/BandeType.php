<?php

namespace App\Form;

use App\Entity\Armoire;
use App\Entity\Bandes;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraint;

class BandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numbande')
            ->add('Label')
            ->add('datedebut', DateType::class, [
                'label' => 'Choisissez votre date de début ',
                'data' => (new \DateTime()),
                
                
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' =>new \DateTime(),
                        
                    ]),
                ],
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d'),
                    'class' => 'form-control datetimepicker-input',
                ],
               
            ])
            ->add('datefin', DateType::class, [
                'label' => 'Choisissez votre date de fin ',

                'data' => new \DateTime(),
               
                
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                       
                    ]),
                ],
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d'),
                    'class' => 'form-control datetimepicker-input',
                ],
               
            ])
            
            ->add('dureederetension')

            // ->add('pool')
            ->add('pool', ChoiceType::class, [
                'choices' => [
                    'Long Local' => 'Long Local',
                    'T24' => 'T24',
                    'G7' => 'G7',
                    'Exchange' => 'Exchange',
                    'Long durée' => 'Long durée',
                    'E10K' => 'E10K',
                ],
                'label' => 'Sélectionnez un rôle',
                
                'attr' => ['class' => 'form-control'],
            ])
            ->add('arm',EntityType::class, [
                'placeholder' => '',
                'class' => Armoire::class,
                'choice_label' => 'nom',
                'label' => 'Choisissez une armoire',
                'required' => true ,
                'attr' => [
                    'class' => 'form-control',
                    'data-toggle' => 'dropdown',
                     ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bandes::class,
        ]);
    }
}
