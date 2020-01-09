<?php

namespace App\Form;

use App\Entity\ArticleTag;
use App\Entity\Blog;
use App\Repository\ArticleTagRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('articleTag', EntityType::class, [
                'class' => ArticleTag::class,
                'choice_label' => 'tag',
                'choice_value' => 'tag',
                'query_builder' => function (ArticleTagRepository $articleTagRepository) {
                    return $articleTagRepository->createQueryBuilder('t')
                        ->orderBy('t.tag', 'ASC');
                },
            ])
            ->add('author', TextType::class, [
                'label' => 'Auteur',
                'trim' => true,
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date',
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'Contenu',
                'trim' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
