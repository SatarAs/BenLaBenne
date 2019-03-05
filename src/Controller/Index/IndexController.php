<?php

namespace App\Controller\Index;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Loader\FileLoader;

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
        /*
        $configDirectories = [__DIR__.'../../Repository/Json'];
            $fileLocator = new FileLocator($configDirectories);
            $jsonUserFiles = $fileLocator->locate('data.json', null, false);
            dump($jsonUserFiles);
        */
      // $fp = fopen('C:\Users\Romain\PhpstormProjects\BenLaBenne\src\Repository\Json\data.json','r');
       //var_dump($fp);
        $fp= file_get_contents("C:\Users\Romain\PhpstormProjects\BenLaBenne\src\Repository\Json\data.json");
        $fp = json_decode($fp);
       //$fp2 = json_decode($fp);
      // var_dump($fp2);

        return $this->render('Index/map.html.twig', [
            'controller_name' => 'IndexController',
            'json' => $fp

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
    public function newsletter()
    {
        return $this->render('Index/home.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

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
