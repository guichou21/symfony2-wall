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
        $em = $this->getDoctrine()
                   ->getManager();

        $items = $em->getRepository('GbCreationWallBundle:Item')->getNbItems(10);

        return $this->render('GbCreationWallBundle:Wall:old.html.twig', array(
            'items' => $items
        ));
    }


     public function indexAction()
    {
        $NB_ITEM_TO_GET = 10;

        $em = $this->getDoctrine()
                   ->getManager();

        //Initialisation - récupération des 10 premières images
        $items = $em->getRepository('GbCreationWallBundle:Item')->getItemsInRange(0,$NB_ITEM_TO_GET);
        $nbItems = $em->getRepository('GbCreationWallBundle:Item')->countAllItems();
        $nbComments = $em->getRepository('GbCreationWallBundle:Comment')->countAllComments();

        return $this->container->get('templating')->renderResponse('GbCreationWallBundle:Wall:index.html.twig', array(
            'items' => $items,
            'nbItems' => $nbItems,
            'nbComments' => $nbComments,
        ));
    }


    public function searchAction()
    {               
        //Par defaut récupère les 10 premiers..
        $FIRST_ITEM_TO_GET = 0;
        $NB_ITEM_TO_GET = 10;

        $logger = $this->get('logger');

        $request = $this->container->get('request');

         $logger->info('[searchAction] recherche de nouveaux items');
        if($request->isXmlHttpRequest())
        {
            $last = '';
            $last = $request->request->get('last');

            $em = $this->container->get('doctrine')->getEntityManager();

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

/*
    public function searchAction()
    {               
        $logger = $this->get('logger');

        $request = $this->container->get('request');

        if($request->isXmlHttpRequest())
        {
            $begin = '';
            $nb = '';
            $begin = $request->request->get('begin');
            $nb = $request->request->get('nb');

            $em = $this->container->get('doctrine')->getEntityManager();

            $logger->info('verif : begin  ['.$begin.'] nb ['.$nb.']');

            if($begin != '' && $nb != '')
            {
                //verifier que bien des chiffres...
                $logger->info('Rafraichissement de la page à partir de ['.$begin.'] et on en prends ['.$nb.']');

                $items = $em->getRepository('GbCreationWallBundle:Item')->getNbItemsFromId($begin,$nb);
            }
            else {
                //récup les 10 premiers par ex
                $items = $em->getRepository('GbCreationWallBundle:Item')->getNbItems(0,10);
            }

            //$form = $this->container->get('form.factory')->create(new ItemSearchType());
            return $this->container->get('templating')->renderResponse('GbCreationWallBundle:Wall:list.html.twig', array(
                'items' => $items,
                ));
        }
        else {
            return $this->indexAction();
        }
    }*/


}