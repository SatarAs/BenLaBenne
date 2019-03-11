<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends AbstractController
{
    /**
     * @param Request $request
     * @return mixed
     * @Route("/admin/articles/add" name="admin_articles_add")
     */
    public function Article(Request $request) {

        $article = new Article();
        $form = $this->createFormbuilder($article)

            ->add('titre', TextType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'class'         =>  'form-control',
                    'placeholder'   =>  'Titre de l\'Article...'
                ]
            ])

            ->add('contenu', TextareaType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'class'         =>  'form-control',
                    'placeholder'   =>  'Contenu de l\'Article...'
                ]
            ])

            ->add('image', FileType::class, [
                'required'      => true,
                'label'         => false,
                'attr'          => [
                    'class'         =>  'dropify',
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Publier',
                'attr'      => [
                    'class' => 'btn btn-primary'
                ]
            ])

            ->getForm();
        $form->handlerequest($request);
        return $this->render('Article/addArticle.html.twig', [
            'form' => $form->createView()
        ]);
    }
}