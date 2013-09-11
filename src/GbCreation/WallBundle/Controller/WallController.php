<?php
namespace GbCreation\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GbCreation\WallBundle\Form\ItemSearchType;

/**
 * Wall controller.
 */
class WallController extends Controller
{
    /**
     * Show a item entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $item = $em->getRepository('GbCreationWallBundle:Item')->find($id);

        if (!$item) {
            throw $this->createNotFoundException('Aucune image trouvée....');
        }

        $comments = $em->getRepository('GbCreationWallBundle:Comment')->getCommentsForBlog($item->getId());

        return $this->render('GbCreationWallBundle:Wall:show.html.twig', array(
            'item'      => $item,
            'comments'  => $comments
        ));
    }


     public function oldAction()
    {
        $params = $this->container->getParameter('Request');
        $em = $this->getDoctrine()
                   ->getManager();

        $items = $em->getRepository('GbCreationWallBundle:Item')->getLastItems($params['NB_ITEM_PER_PAGE']);

        return $this->render('GbCreationWallBundle:Wall:old.html.twig', array(
            'items' => $items
        ));
    }

    public function resumeAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $nbItems = $em->getRepository('GbCreationWallBundle:Item')->countAllItems();
        $nbComments = $em->getRepository('GbCreationWallBundle:Comment')->countAllComments();

        return $this->container->get('templating')->renderResponse('GbCreationWallBundle:Wall:resume.html.twig', array(
                'nbItems' => $nbItems,
                'nbComments' => $nbComments,
            ));

    }

     public function indexAction()
    {
        $params = $this->container->getParameter('Request');
        $NB_ITEM_TO_GET = $params['NB_ITEM_PER_PAGE'];

        $em = $this->getDoctrine()
                   ->getManager();

        //Initialisation - récupération des 10 premières images
        $items = $em->getRepository('GbCreationWallBundle:Item')->getLastItems($NB_ITEM_TO_GET);
    
        return $this->container->get('templating')->renderResponse('GbCreationWallBundle:Wall:index.html.twig', array(
            'items' => $items,
        ));
    }


    public function searchAction()
    {               
        //Par defaut récupère les 10 premiers..
        $params = $this->container->getParameter('Request');
        $FIRST_ITEM_TO_GET = 0;
        $NB_ITEM_TO_GET = $params['NB_ITEM_PER_PAGE'];

        $logger = $this->get('logger');

        $request = $this->container->get('request');

         $logger->info('[searchAction] recherche de nouveaux items');
        if($request->isXmlHttpRequest())
        {
            $last = '';
            $last = $request->request->get('last');

            $em = $this->container->get('doctrine')->getManager();

            $logger->info('[searchAction]  verification nullité de ['.$last.'] ');

            if($last != '')
            {
                //verifier que bien des chiffres...
                $logger->info('[searchAction] Rafraichissement de la page à partir de ['.$last.']');
                $items = $em->getRepository('GbCreationWallBundle:Item')->getItemsInRange($last,$NB_ITEM_TO_GET);
            }
            else {
                //récup les 10 premiers par ex
                $logger->info('[searchAction] par defaut Rafraichissement de la page à partir de ['.$FIRST_ITEM_TO_GET.'] jusqu à  ['.$NB_ITEM_TO_GET.']');
                $items = $em->getRepository('GbCreationWallBundle:Item')->getItemsInRange($FIRST_ITEM_TO_GET,$NB_ITEM_TO_GET);
            }

            return $this->container->get('templating')->renderResponse('GbCreationWallBundle:Wall:list.html.twig', array(
                'items' => $items,
                ));
        }
        else {
            $logger->info('[searchAction] rqt non ajax redirect vers index avec affichage par defaut');            
            return $this->indexAction();
        }
    }

}