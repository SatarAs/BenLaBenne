<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('Admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/account", name="admin_account")
     */
    public function account()
    {
        return $this->render('Admin/account.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/connexion", name="admin_connexion")
     */
    public function connexion()
    {
        return $this->render('Admin/connexion.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/containers", name="admin_containers")
     */
    public function containers()
    {
        return $this->render('Admin/containers.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/containers/{id}", name="admin_containers_manage")
     */
    public function containerManage()
    {
        return $this->render('Admin/containers.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/add/pictures", name="admin_pictures")
     */
    public function addPictures()
    {
        return $this->render('Admin/Add/pictures.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/add/pictures/{id}", name="admin_pictures_manage")
     */
    public function pictureManage()
    {
        return $this->render('Admin/Add/pictures.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/add/articles", name="admin_articles")
     */
    public function addArticles()
    {
        return $this->render('Admin/Add/articles.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/add/articles/{id}", name="admin_articles_manage")
     */
    public function articlesManage()
    {
        return $this->render('Admin/Add/articles.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
