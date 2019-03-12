<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\Article;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends AbstractController
{
    /**
     * @param Request $request
     * @return mixed
     * @Route("/admin/articles/add", name="admin_articles_add")
     */
    public function Article(Request $request)
    {


        $form = $this->createFormbuilder()
            ->add('titre', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre de l\'Article...'
                ]
            ])

            ->add('Admin', EntityType::class, [
                'class'=>Admin::class
            ])

            ->add('chapo', TextareaType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description de l\'Article...'
                ]
            ])
            ->add('contenu', TextareaType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Contenu de l\'Article...'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Publier',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->getForm();
        $form->handlerequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $titre = $data['titre'];
            $chapo = $data['chapo'];
            $contenu = $data['contenu'];
            $article = new Article();

            $article->setTitre($titre);
            $article->setChapo($chapo);
            $article->setContenu($contenu);
            $article->setCreatedAt(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return new Response('Article ajouté, merci !');
        }


        return $this->render('Admin/Add/addArticle.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
