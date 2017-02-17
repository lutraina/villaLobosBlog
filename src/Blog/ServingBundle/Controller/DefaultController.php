<?php

namespace Blog\ServingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Blog\ServingBundle\AntispamServing\Antispam;
use Blog\ServingBundle\Twig\AppExtension;

use Psr\Log\LoggerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction()
    {
        $mailer = $this->container->get('mailer'); 

        return $this->render('BlogServingBundle:Default:index.html.twig', array('text' => $text));
    }
}
