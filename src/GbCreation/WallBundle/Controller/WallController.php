<?php
namespace GbCreation\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Item controller.
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


     public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $items = $em->createQueryBuilder()
                    ->select('i')
                    ->from('GbCreationWallBundle:Item',  'i')
                    ->addOrderBy('i.date', 'DESC')
                    ->getQuery()
                    ->getResult();

        return $this->render('GbCreationWallBundle:Wall:index.html.twig', array(
            'items' => $items
        ));
    }


}