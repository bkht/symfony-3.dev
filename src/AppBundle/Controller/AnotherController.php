<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnotherController extends Controller
{
    /**
     * @Route("/another", name="another")
     */
    public function anotherAction()
    {
        $this->get('logger')->log('critical', 'blow up');

        return $this->render('another/another.html.twig');
    }
}
