<?php

namespace GbCreation\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GbCreationWallBundle:Default:index.html.twig', array('name' => $name));
    }
}
