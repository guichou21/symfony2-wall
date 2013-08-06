<?php
namespace GbCreation\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GbCreationHomeBundle:Home:index.html.twig');
    }
}
