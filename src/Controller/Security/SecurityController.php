<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{

    /**
     * @Route("/admin/connexion", name="security_connexion", methods={"GET"})
     */
    public function connexion()
    {
        return $this->render('security/connexion.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/admin/account", name="security_account")
     */
    public function account()
    {
        return $this->render('security/account.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/contact/success", name="security_email")
     */
    public function email()
    {
        return $this->render('security/success.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/admin/account/forget", name="security_forget")
     */
    public function forget()
    {
        return $this->render('security/forget.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/admin/account/edit", name="security_edit")
     */
    public function edit()
    {
        return $this->render('security/edit.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

}
