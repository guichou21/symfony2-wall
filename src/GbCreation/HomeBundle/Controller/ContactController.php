<?php
namespace GbCreation\HomeBundle\Controller;

use GbCreation\HomeBundle\Entity\Contact;
use GbCreation\HomeBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    
     public function contactAction()
    {

    	$contact = new Contact();
        $form   = $this->createForm(new ContactType(), $contact);

    	$request = $this->getRequest();
       
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

             if ($form->isValid()) {

               /* 
               //$process = $formHandler->process();
               $em = $this->getDoctrine()->getManager();

                $this->get('session')->setFlash('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');

                $this->get('session')->getFlashBag()->add('notice', 'Ajout a été effectué');    */
                $message = \Swift_Message::newInstance()
                    ->setSubject('Hello Email')
                    ->setFrom('dev.gbe@company.com')
                    ->setTo('recipient@example.com')
                    ->setBody($this->renderView('GbCreationHomeBundle:Contact:email.txt.twig'))
                ;
                $this->get('mailer')->send($message);



                return $this->render('GbCreationHomeBundle:Home:index.html.twig');
            }
        }

        return $this->render('GbCreationHomeBundle:Contact:contact.html.twig',
                array(
                    'form' => $form->createView(),
                ));
    }

}
