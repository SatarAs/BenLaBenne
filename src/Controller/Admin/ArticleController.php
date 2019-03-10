<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/*
class ArticleController extends AbstractController
{

    /**
     * @Route("/admin/articles/add", name="admin_article_add")
     */
/*
    public function add()
    {
        return $this->render('Admin/Add/addArticle.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
/*
    /**
     * @Route("/admin/articles/edit/{id}", name="admin_article_edit")
     */
/*
    public function edit()
    {
        return $this->render('Admin/edit/editArticle.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/admin/articles/delete/{id}", name="admin_article_delete")
     */
/*
    public function delete()
    {
        return $this->render('Admin/delete/deleteArticle.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/admin/articles", name="admin_articles_manage")
     */
/*
    public function articlesManage()
    {
        return $this->render('Admin/showArticles.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

}
