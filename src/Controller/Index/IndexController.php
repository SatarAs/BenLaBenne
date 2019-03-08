<?php

namespace App\Controller\Index;



use App\Entity\NewsletterSend;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{

    /**
     * @Route("/", name="index_home")
     */
    public function index()
    {
        return $this->render('Index/home.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


    /**
     * @Route("/news", name="news")
     */
    public function news()
    {
        return $this->render('Index/news.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/news/articles/{id}", name="news_article")
     */
    public function article()
    {
        return $this->render('Index/news.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/chat", name="chat")
     */
    public function chat()
    {
        return $this->render('Index/chat.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/mentionLegales", name="mentionLegales")
     */
    public function mentionLegales()
    {
        return $this->render('static/mentionLegales.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


    /**
     * @Route("/map", name="map")
     */
    public function map()
    {


        return $this->render('Index/map.html.twig', [
            'controller_name' => 'IndexController',


        ]);
    }

    /**
     * @Route("/map/containers/{id}", name="map_containers")
     */
    public function containers()
    {
        return $this->render('Index/map.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function Newsletter(){
        $newsletterSend = New NewsletterSend();
        $newsletterSend->setNewsletterSend("Inscription");

        $form = $this->createFormBuilder($newsletterSend)
            ->add('Inscription', EmailType::class)
            ->getForm();

        return $this->render('footer.html.twig',[
            'form' => $form->createView()
        ]);
    }

/*
    $newsletter = (new \Swift_Message('Votre souscription à la Newsletters'))
        ->setFrom('contact@benlabenne.com')
        ->SetTo('test@gmail.com')
        ->SetCc('test2@gmail.com')
        ->SetBody($this->renderView('static/newsletter.html.twig'));

    $mailer->send($newsletter);
    return $this->render('Index/home.html.twig');
*/


    /**
     * @Route("/team", name="team")
     */
    public function team()
    {
        return $this->render('Index/team.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('Index/contact.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
