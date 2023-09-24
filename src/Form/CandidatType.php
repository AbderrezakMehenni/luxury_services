<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Choose an option' => null,
                    'Homme' => true,
                    'Femme' => false,
                ],
                'label' => 'Genre',
                'row_attr' => [
                    'class' => 'input-field',
                ]
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'first_name',
                    'name' => 'first_name',
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'last_name',
                    'name' => 'last_name',
                ]
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'address',
                    'name' => 'address',
                ]
            ])
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'country',
                    'name' => 'country',
                ]
            ])
            ->add('nationalite', TextType::class, [
                'label' => 'Nationalité',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nationality',
                    'name' => 'nationality',
                ]
            ])
            // ->add('ispassport')
            ->add('date_naissance', BirthdayType::class, [
                'label' => 'Date de naissance',
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                ],
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'datepicker',
                    'id' => 'birth_date',
                    'name' => 'birth_date',
                ]
            ])
            ->add('lieu_naissance', TextType::class, [
                'label' => 'Lieu de naissance',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'birth_place',
                    'name' => 'birth_place',
                ]
            ])
            // ->add('email')
            // ->add('password')
            // ->add('disponibilite')
            ->add('job_categorie', ChoiceType::class, [
                'choices' => [
                    'Choose an option' => null,
                    'Commerce' => 'Commerce',
                    'Finance' => 'Finance',
                    'Social' => 'Social',
                    'Santé' => 'Santé',
                    'Tech' => 'Tech',
                    'Manutention' => 'Manutention',
                    'Education' => 'Education',
                    'Ingénierie' => 'Ingénierie',
                ],
                'label' => 'Catégorie de job',
                'row_attr' => [
                    'class' => 'input-field',
                ]
            ])
            ->add('experience', ChoiceType::class, [
                'choices' => [
                    'Choose an option' => null,
                    '0 - 6 mois' => '0 - 6 mois',
                    '6 mois - 1 an' => '6 mois - 1 an',
                    '1 - 2 ans' => '1 - 2 ans',
                    '2+ ans' => '2+ ans',
                    '5+ ans' => '5+ ans',
                    '10+ ans' => '10+ ans',
                ],
                'label' => 'Expérience professionnelle',
                'row_attr' => [
                    'class' => 'input-field',
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Décrivez-vous',
                'row_attr' => [
                    'class' => 'input-field',
                ],
                'attr' => [
                    'class' => 'materialize-textarea',
                    'id' => 'description',
                    'name' => 'description',
                ]
            ])
            // ->add('date_create')
            // ->add('date_uptaded')
            // ->add('date_deleted')
            // ->add('user')
            ->add('passport', FileType::class, [
                'label' => 'Met ton passport',
                'mapped' => false,
                'required' => false,
            ])
            ->add('cv', FileType::class, [
                'label' => 'Met ton cv, vite !',
                'mapped' => false,
                'required' => false,
            ])
            ->add('profil_picture', FileType::class, [
                'label' => 'Met ta photo bg',
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
