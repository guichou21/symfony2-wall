<?php

namespace GbCreation\WallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use GbCreation\WallBundle\Entity\Item;
use GbCreation\WallBundle\Form\ItemType;
use GbCreation\WallBundle\Form\ItemEditedType;
use GbCreation\WallBundle\Form\CommentEditedType;


/*

En attendant que  JMSSecurityExtraBundle  soir OK avec symfony2.3.1 on fait des if else
=> permet Annotation sur chaque fonction :  @_S_e_c_u_r_e_(_r_o_l_e_s_=_"_R_O_L_E___A_U_T_E_U_R_"_)
Alternative : https://github.com/LeaseWeb/LswSecureControllerBundle
http://www.leaseweblabs.com/2013/06/secure-annotation-for-symfony-2-3/
*/


/**
 * Admin controller.
 */
class AdminController extends Controller
{
    public function indexAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }
        return $this->render('GbCreationWallBundle:Admin:index.html.twig');
    }

    public function statsAction()
    {


        return $this->render('GbCreationWallBundle:Admin:stats.html.twig');
    }

/* notmalement new ???*/ 
	/**
     * Displays a form to create a new Item entity.
     *
     */
    public function addAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        $entity = new Item();
        $form   = $this->createForm(new ItemType(), $entity);
 
        return $this->render('GbCreationWallBundle:Admin:add.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function itemsAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        $em = $this->getDoctrine()->getManager();
        
        $items = $em->getRepository('GbCreationWallBundle:Item')
                ->getAllItems();


        /*$items = $em->createQueryBuilder()
                ->select('i')
                ->from('GbCreationWallBundle:Item',  'i')
                ->addOrderBy('i.date', 'DESC')
                ->getQuery()
                ->getResult();*/


        return $this->render('GbCreationWallBundle:Admin:items.show.html.twig', array(
            'items' => $items
        ));
    }


    /**
     * Creates a new Item entity.
     *
     */
    public function createItemAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        $entity  = new Item();
        $request = $this->getRequest();
        $form    = $this->createForm(new ItemType(), $entity);
        //$form->bindRequest($request);
        $form->handleRequest($request);
 
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            /* ne plus appeler le move vu que callbacks*/
            //$entity->upload();

            $em->persist($entity);
            $em->flush();
 
            $this->get('session')->getFlashBag()->add('notice', 'Ajout a été effectué');
            return $this->redirect($this->generateUrl('gb_creation_admin__add'));
            //return $this->redirect($this->generateUrl('gb_creation_admin__index', array('id' => $entity->getId())));
             
        }
 
        return $this->render('GbCreationWallBundle:Admin:add.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
     
    private function createDeleteForm($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

     public function editItemAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        $entityManager = $this->getDoctrine()->getManager();

        $entity = $entityManager->getRepository("GbCreationWallBundle:Item")->find($id);
          
       $form = $this->createForm(new ItemEditedType(), $entity);
     
     
        /* On récupère les données du formulaire si il a déjà été passé */
        $request = $this->get('request');
     
        /* On ne traite que les données passées en méthode POST */
        if ($request->getMethod() == 'POST') {
            /* On applique les données récupérées au formulaire */
            $form->handleRequest($request);
     
            /* Si le formulaire est valide, on valide et on redirige vers l'accueil' */
            if ($form->isValid()) {               
                $entityManager->persist($entity);
                $entityManager->flush();
     
                $this->get('session')->getFlashBag()->add('notice', 'modification a été prise en compte');
                return $this->redirect($this->generateUrl('gb_creation_admin_items_show'));
            }
        }
 
        /* Si aucun formulaire valide n'est récupéré, on affiche le formulaire */
        return $this->render('GbCreationWallBundle:Admin:edit.html.twig', array(
            "form" => $form->createView(),
            "item_id" => $entity->getId(),
            "item_name" => $entity->getFile(),
        ));
    }

    public function deleteItemAction($id)
        {
            if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
              throw new AccessDeniedHttpException('Accès limité aux Admins');
            }

                $entityManager = $this->getDoctrine()->getManager();
                $entity = $entityManager->getRepository("GbCreationWallBundle:Item")->find($id);
                $entityManager->remove($entity);   
                $entityManager->flush();
         
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('notice', 'item bien supprimé');
         
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('gb_creation_admin_items_show'));
        }


        //avant de faire le confirm en popup 
     public function __form__deleteItemAction($id)
    {
        

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'item contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
          $form->handleRequest($request);
     
          if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entity = $entityManager->getRepository("GbCreationWallBundle:Item")->find($id);;
            $entityManager->remove($entity);   
            $entityManager->flush();
     
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('notice', 'item bien supprimé');
     
            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('gb_creation_admin_items_show'));
          }
        }
         
            // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
            return $this->render('GbCreationWallBundle:Admin:delete.html.twig', array(
              'item_id' => $id,
              'form'    => $form->createView()
            ));
    }


         public function commentsAction()
        {
             if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
                throw new AccessDeniedHttpException('Accès limité aux Admins');
             }

            $em = $this->getDoctrine()->getManager();

            $comments = $em->getRepository('GbCreationWallBundle:Comment')
                ->getAllCommentsForBlogWithItem();
                   
            /*$comments = $em->createQueryBuilder()
                    ->select('i')
                    ->from('GbCreationWallBundle:Comment',  'i')
                    ->addOrderBy('i.created', 'DESC')
                    ->getQuery()
                    ->getResult();*/


            return $this->render('GbCreationWallBundle:Admin:comments.show.html.twig', array(
                'comments' => $comments
            ));
        }
 
    public function editCommentAction($id)
        {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        $entityManager = $this->getDoctrine()->getManager();

        $entity = $entityManager->getRepository("GbCreationWallBundle:Comment")->find($id);
          
       $form = $this->createForm(new CommentEditedType(), $entity);
     
     
        /* On récupère les données du formulaire si il a déjà été passé */
        $request = $this->get('request');
     
        /* On ne traite que les données passées en méthode POST */
        if ($request->getMethod() == 'POST') {
            /* On applique les données récupérées au formulaire */
            $form->handleRequest($request);
     
            /* Si le formulaire est valide, on valide et on redirige vers l'accueil' */
            if ($form->isValid()) {               
                $entityManager->persist($entity);
                $entityManager->flush();

                $this->get('session')->getFlashBag()->add('notice', 'modification a été prise en compte');
                return $this->redirect($this->generateUrl('gb_creation_admin_comments_show'));
            }
        }
 
        /* Si aucun formulaire valide n'est récupéré, on affiche le formulaire */
        return $this->render('GbCreationWallBundle:Admin:comment.edit.html.twig', array(
            "form" => $form->createView(),
            "comment_id" => $entity->getId(),
        ));
    }

    public function deleteCommentAction($id)
        {
            if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
                throw new AccessDeniedHttpException('Accès limité aux Admins');
             }

            $entityManager = $this->getDoctrine()->getManager();
            $entity = $entityManager->getRepository("GbCreationWallBundle:Comment")->find($id);

            $itemReference = $entityManager->getRepository('GbCreationWallBundle:Item')->find($entity->getIdItem()->getId());
            $itemReference->setNbLike($itemReference->getNbLike()-1);

            $entityManager->remove($entity);   
            $entityManager->persist($itemReference);

            $entityManager->flush();
     
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('notice', 'Commentaire bien supprimé');
     
            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('gb_creation_admin_comments_show'));         
        }


     public function ___deleteCommentAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès limité aux Admins');
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'item contre cette faille
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
          $form->handleRequest($request);
     
          if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entity = $entityManager->getRepository("GbCreationWallBundle:Comment")->find($id);;
            $entityManager->remove($entity);   
            $entityManager->flush();
     
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('notice', 'Commentaire bien supprimé');
     
            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('gb_creation_admin_comments_show'));
          }
        }
         
            // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
            return $this->render('GbCreationWallBundle:Admin:comment.delete.html.twig', array(
              'comment_id' => $id,
              'form'    => $form->createView()
            ));
    }

}