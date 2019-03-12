<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function index()
    {
        $json = file_get_contents('../public/Json/benne.json');

        $json = substr($json,11);
        $showContainers = json_decode($json,true);
        var_dump($showContainers[0]['features'][0]['geometry']);


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
        $json = file_get_contents('../public/Json/ben.js');

        $json = substr($json,10);
        $showContainers = json_decode($json,true);

        // Déclaration des différents tableaux
        $properties = $showContainers[0]['features'][0]['properties'];
         // var_dump($showContainers[0]['features']);

        return $this->render('Admin/containers.html.twig', array(
            'json' => $showContainers,
            'features' => $showContainers[0]['features'],
            'properties' => $showContainers[0]['features'][0]['properties'],
            'coordinatesX' => $showContainers[0]['features'][0]['geometry']['coordinates'][0],
            'coordinatesY' => $showContainers[0]['features'][0]['geometry']['coordinates'][1],

            // Première manière
            // 'commune' => $showContainers[0]['features'][0]['properties'],

            // Deuxième manière
            'commune'           => $properties['commune'],
            'code_postal'       => $properties['code_postal'],
            'numerodansvoie'    => $properties['numerodansvoie'],
            'voie'              => $properties['voie'],
        ));
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
