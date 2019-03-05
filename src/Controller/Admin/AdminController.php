<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
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

}
