<?php
namespace App\Controller\Index;
use App\Entity\Article;
use App\Entity\NewsletterSend;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class IndexController extends AbstractController
{


    /**
     * @var ArticleRepository
     */
    private $repository;
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

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
        $articles = $this->repository->findAll();
        return $this->render('Index/news.html.twig', compact('articles'));
    }
    /**
     * @Route("/news/articles/{id}", name="news_article")
     */
    public function article($id)
    {
        $article = $this->repository->find($id);
        return $this->render('Index/article.html.twig', compact('article'));
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
     * @Route("/infos", name="infos")
     */
    public function infosNewsletter()
    {
        return $this->render('static/newsletter.html.twig', [
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
     * @param \Swift_Mailer $mailer
     */
    public function Newsletter(\Swift_Mailer $mailer, Request $request)
    {
        $test = new NewsletterSend();
        $form = $this->createFormBuilder($test)
            ->add('Newsletter', EmailType::class)
            ->add('envoyer', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $newsletterSend = $data->Newsletter;
            $message = (new \Swift_Message('Rappel évenement'))
                ->setFrom('contact@gmail.com')
                ->setTo($newsletterSend)
                ->setCc('test2@gmail.com')
                ->setBody('Vous êtes bien inscrit à la newsletter de BenLaBenne, merci !');
            $mailer->send($message);
            return new Response('Mail envoyé');
        }
        return $this->render('newsletter/newsletterSub.html.twig', [
            'form' => $form->createView(),
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
