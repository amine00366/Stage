<?php

namespace App\Form;

use App\Entity\Armoire;
use App\Entity\Bandes;
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
            ->add('datedebut', DateTimeType::class, [
                'label' => 'Choisissez votre date de début ',
                'required' => true ,
                'data' => new \DateTime(),
                'widget' => 'single_text',
                
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date et l\'heure doivent être supérieures ou égales à la date actuelle.',
                    ]),
                ],
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d\TH:i'),
                    'class' => 'form-control datetimepicker-input',
                ],
               
            ])
            ->add('datefin', DateTimeType::class, [
                'label' => 'Choisissez votre date de début ',
                'required' => true ,
                'data' => new \DateTime(),
                'widget' => 'single_text',
                
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date et l\'heure doivent être supérieures ou égales à la date actuelle.',
                    ]),
                ],
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d\TH:i'),
                    'class' => 'form-control datetimepicker-input',
                ],
               
            ])
            
            ->add('dureederetension')

            ->add('pool')

            ->add('arm',EntityType::class, [
                'placeholder' => '',
                'class' => Armoire::class,
                'choice_label' => 'nomtype',
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
