<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PictureController extends AbstractController
{

    /**
     * @Route("/admin/pictures/add", name="admin_picture_add")
     */
    public function add()
    {
        return $this->render('Admin/Add/addPicture.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }

    /**
     * @Route("/admin/pictures/edit/{id}", name="admin_picture_edit")
     */
    public function edit()
    {
        return $this->render('Admin/edit/editPicture.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }

    /**
     * @Route("/admin/pictures/delete/{id]", name="admin_picture_delete")
     */
    public function delete()
    {
        return $this->render('Admin/delete/deletePicture.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }

    /**
     * @Route("/admin/pictures/{id}", name="admin_pictures_manage")
     */
    public function pictureManage()
    {
        return $this->render('Admin/showPictures.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }



}
