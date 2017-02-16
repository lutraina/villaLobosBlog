<?php

namespace Blog\ServingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Blog\ServingBundle\AntispamServing\Antispam;

use Psr\Log\LoggerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction()
    {
//        $antispam = $this->container->get('blog_serving.antispam');

        $mailer = $this->container->get('mailer'); 
        $text = 'palavra';

//        if ($antispam->isSpam($text)) {
//
//          throw new \Exception('Votre message a été détecté comme spam !');
//
//        }

        return $this->render('BlogServingBundle:Default:index.html.twig', array('text' => $text));
    }
}
